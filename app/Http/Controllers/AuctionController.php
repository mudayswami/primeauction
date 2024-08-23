<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Lot;
use Illuminate\Http\Request;
use App\Models\AuctionRegister;
use App\Models\AddressBook;
use Auth;
class AuctionController extends Controller
{
    function auction(Request $request)
    {
        $data['auction'] = Auction::all()->toArray();
        return view("auction.mainAuction", $data);
    }

    function catalogue(Request $request, $id)
    {
        $data['auction'] = Auction::find($id)->toArray();
        $data['lots'] = Lot::where('auction_id', $id)->get()->toArray();
        if(auth::check()){
            $data['registered'] = AuctionRegister::select('approved')->where(['user_id'=>session('user_data')['user_id'],'auction_id'=>$id])->get()->first();
        }
        return view("auction.auctionCatalogue", $data);
    }

    function category(Request $request)
    {
        return view("auction.category");

    }

    function bid(Request $request, $id)
    {
        $data['lot'] = Lot::with('auction')->where('enc_id',$id)->get()->first();
        return view("auction.bid", $data);
    }
    function aboutus(Request $request)
    {
        return view('auction.aboutus');
    }

    function auctionRegister(Request $request)
    {
        $auction_id = $request->segment(2);
        AuctionRegister::create([
            'user_id' => session('user_data')['user_id'],
            'auction_id' => $auction_id,
            'payment_card' => 'null',
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'vat_number' => $request->vat_number,
            'company' => $request->company,
        ]);
        return back();
    }

    function registerToBid(Request $request){
        $auction_id         = $request->segment(2);
        $data['auction']    = Auction::findOrFail($auction_id);
        $user_id            = session('user_data')['user_id'];
        $count              = AuctionRegister::where(['user_id'=>$user_id, 'auction_id'=>$auction_id])->count();
        $data['address']    = AddressBook::where('user_id',$user_id)->get();
        $data['phone_number'] = session('user_data')['phone_number'];
        if($count == 0){
            return view('auction.registerToBid',$data);
        }else{
            return redirect('catalogue/'.$auction_id);
        }
    }
}
