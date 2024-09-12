<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Cart;
use App\Models\Orders;
use App\Models\OrderItems;
use DB;
use Auth;

class StoreController extends Controller 
{
    function home(){
        $data['products'] = Products::where('featured','!=',0)->get();
        return view("store.home",$data);
    }

    function products(Request $request){
        $departmentCategoryMap = [
            'small-domestic-appliance' => ['Home Appliances', 'High Street Goods'],
            'homeware' => ['Decor', 'Home Improvements', 'Kitchens', 'Bathrooms'],
            'baby-toddler' => ['Children & Baby'],
            'jewellery' => ['Jewellery & Watches'],
            'hair-care' => ['Health & Beauty'],
            'health-beauty' => ['Health & Beauty', 'Liquidations, Returns & Pallets'],
            'clothing' => ['Fashion'],
            'furniture' => ['Furniture', 'Home Improvements'],
        ];
        $department = $request->query('department');

        $categories = $departmentCategoryMap[$department] ?? [];


        $data['products'] = Products::query()->where('status', 1)
        ->when($categories, function ($query) use ($categories) {
            return $query->whereIn('department', $categories);
        })
        ->when($request->query('search'), function($query, $search) {
            return $query->where(function($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%') 
                ->orWhere('description', 'like', '%' . $search . '%'); 
            });
        })
        ->when($request->query('min_price') || $request->query('max_price'), function($query) use ($request) {
            $minPrice = $request->query('min_price') ?: 0; 
            $maxPrice = $request->query('max_price') ?: PHP_INT_MAX; 
            return $query->whereBetween('discount_price', [$minPrice, $maxPrice]);
        })->when($request->query('sort'), function($query, $sort) {
            switch ($sort) {
                case 'featured':
                    return $query->where('featured', 1);
                case 'best_selling':
                    return $query->where('featured', 2);
                case 'price_high_low':
                    return $query->orderBy('discount_price', 'desc');
                case 'price_low_high':
                        return $query->orderBy('discount_price', 'asc');
                case 'alphabetical_asc':
                    return $query->orderBy('title', 'asc');
                case 'alphabetical_desc':
                    return $query->orderBy('title', 'desc');
                case 'date_new_old':
                    return $query->orderBy('created_at', 'desc');
                case 'date_old_new':
                    return $query->orderBy('created_at', 'asc');
                default:
                    return $query;
            }
        })->get();
        return view('store.products', $data);
    }

    function department(Request $request){
        return view('store.department');
    }

    function aboutus(){
        return view('store.aboutus');
    }

    function item($slug){
        $data['item']       = Products::where('id',$slug)->get()->first();
        $data['products']   = Products::where('status',1)->select('title','img','id','discount_price')->limit(4)->get();
        return view('store.item',$data);
    }

    function cart(Request $request){
        $data['items'] = Cart::with('product')->where('user_id',session('user_data')['user_id'],)->get();
        return view('store.cart',$data);
    }

    function addCart(Request $request){
        if(!Auth::check()){
        return response()->json(['message' => 'login']);
        }
        $request->validate([
            'product_id' => 'required|integer',
        ]);
        $productId = $request->product_id;
        $userId = session('user_data')['user_id'];

        $cartItem = Cart::where('user_id', $userId)
        ->where('product_id', $productId)
        ->first();

        if ($cartItem) {
        if($request->quantity <= 0){
             $cartItem->delete();
        }else{

            $cartItem->quantity = $request->quantity;
            $cartItem->final_price = $cartItem->quantity * $cartItem->price;
            $cartItem->save();
            }
        } else {
            $item = Products::where('id',$productId)->get()->first();
            Cart::create([
                'user_id'       =>  $userId,
                'product_id'    => $item->id,
                'item_name'     => $item->title,
                'price'         => $item->discount_price,
                'final_price'   => $item->discount_price ,
                'quantity'      => $request->quantity,
            ]);
        }
        $cart_count = Cart::where('user_id',$userId)->count();
        $user_data = session('user_data');
        $user_data['cart_count'] = $cart_count;
        session(['user_data'=>$user_data]);
        return $cart_count;
        return response()->json(['message' => 'Product added to cart successfully.']);
        
    }

    function cartCheckout(){
        $userId = session('user_data')['user_id'];
        $paymentController = new PaymentController();
        $cartItems = Cart::where('user_id', $userId)->get();

        if ($cartItems->isEmpty()) {
            return response()->json(['message' => 'Your cart is empty!'], 400);
        }

        $totalAmount = $cartItems->sum(function ($item) {
            return $item->final_price;
        });

        DB::beginTransaction();
        
        try {
            $order = Orders::create([
                'user_id' => $userId,
                'total_amount' => $totalAmount,
            ]);

            foreach ($cartItems as $item) {
                OrderItems::create([
                    'user_id'=> $userId,
                    'order_id' => $order->id,
                    'product_id' => $item->product_id,
                    'item_name' => $item->item_name,
                    'price' => $item->price,
                    'quantity' => $item->quantity,
                    'total_price' => $item->final_price,
                ]);
            }

            Cart::where('user_id', $userId)->delete();
            DB::commit();
            return $paymentController->checkout($order->id, $totalAmount);
            
            return response()->json(['message' => 'Checkout successful! Order placed.']);
        } catch (\Exception $e) {
            DB::rollback();

            return response()->json(['message' => 'Checkout failed! Please try again.'], 500);
        }
    }


    function singleCheckout(Request $request, $slug){
        $userId = session('user_data')['user_id'];
        $paymentController = new PaymentController();
        $item = Products::where('id',$slug)->get()->first();

        if (empty($item)) {
            return response()->json(['message' => 'Your cart is empty!'], 400);
        }
        DB::beginTransaction();
        
        // try {
            $order = Orders::create([
                'user_id' => $userId,
                'total_amount' => $item->discount_price,
            ]);

                OrderItems::create([
                    'user_id'=> $userId,
                    'order_id' => $order->id,
                    'product_id' => $item->id,
                    'item_name' => $item->title,
                    'price' => $item->discount_price,
                    'quantity' => 1,
                    'total_price' => $item->discount_price,
                ]);

            DB::commit();
            return $paymentController->checkout($item->title, $item->discount_price);
            
            return response()->json(['message' => 'Checkout successful! Order placed.']);
        // } catch (\Exception $e) {
        //     DB::rollback();

        //     return response()->json(['message' => 'Checkout failed! Please try again.'], 500);
        // }
    }

    

    
}
