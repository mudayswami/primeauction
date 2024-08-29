<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Lot;
use Illuminate\Http\Request;
use App\Models\AuctionRegister;
use App\Models\AddressBook;
use App\Models\Bids;
use Auth;
use DB;
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
        if(Auth::check()){
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
        $user_id                    = session('user_data')['user_id'];
        $data['lot']                = Lot::with('auctionRegister')->where('enc_id',$id)->get()->first();
        $data['auction_register']   = AuctionRegister::where(['auction_id'=>$data['lot']->auction->id,'user_id'=>$user_id])->select('approved')->get()->first();
        $data['bids']               = Bids::where('lot',$data['lot']->id)->orderBy('bid_amount','desc')->get()->toArray();
        $data['user_bid']           = [];
        foreach($data['bids'] as $key => $value){
            if($value['user_id'] == $user_id){
                array_push($data['user_bid'],$value);
            }
        }
        // $data['data'] = DB::table('auction_register')->join('tbl_lot','tbl_lot.auction_id','=','auction_register.auction_id')->leftjoin('bids','tbl_lot.id','=','bids.lot')->get();
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

    function bidSet(Request $request){
        $user_id        = session('user_data')['user_id'];
        $lot            = Lot::with('bids')->find($request->lot)->orderBy('bid_amount','desc');
        Bids::create([
            'user_id' => '66c064dbce60a',
            'lot'   => $request->lot,
            'bid_amount' => $request->bid,
            'max_bid_amount' => $request->bid,
            'reserve_met' => 1
        ]);

        $data['user_bid'] = Bids::where(['user_id'=>$user_id,'lot'=>$request->lot])->orderBy('bid_amount','desc')->get()->toArray();
        $data['bids'] = Bids::where(['lot'=>$request->lot])->orderBy('bid_amount','desc')->get()->toArray();
        return $data;
    }
}
