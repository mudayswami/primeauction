<?php

namespace App\Http\Controllers;

use App\Models\AddressBook;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Auction;
use App\Models\Watchlist;
use App\Models\Lot;
use Auth;
use DB;

class AccountController extends Controller
{
    function myAccount(request $request)
    {
        $user_id = session('user_data')['user_id'];
        $data = User::select('first_name', 'last_name', 'phone_number', 'company', 'vat_number')->where('user_id', $user_id)->first();
        return view('auction.user.profile', compact('data'));

    }

    function updateProfile(request $request)
    {
        $request->validate([
            'first_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'phone_number' => ['required', 'integer'],
            ''
        ]);
        $user_id = session('user_data')['user_id'];
        $update = User::where('user_id', $user_id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'company' => $request->company,
            'phone_number' => $request->phone_number,
            'vat_number' => $request->vat_number
        ]);
        return back()->with('status', 'Profile Updated');
    }

    function address(request $request)
    {
        $data['address'] = AddressBook::where('user_id', session('user_data')['user_id'])->get();
        return view('auction.user.address', $data);
    }

    function addAddress(request $request)
    {   $data['address'] = AddressBook::where('user_id',session('user_data')['user_id']);
        return view('auction.user.addAddress',$data);
    }

    function postAddress(request $request){
        $request->validate([
            'address1' => ['required','max:255'],
            'town' => ['required','max:155'],
            'post_code' => ['required',],
            'country' => ['required','string','max:20'],
        ]);

        AddressBook::create([
            'user_id'=> session('user_data')['user_id'],
            'address1'=>$request->address1,
            'address2'=>$request->address2,
            'address3'=>$request->address3,
            'town' => $request->town,
            'post_code' => $request->post_code,
            'country' => $request->country
        ]);

        return redirect('account/address')->with('status','Address Added');
    }

    function registerations(){
        $user_id = session('user_data')['user_id'];
        $data['auction'] = Auction::join('auction_register','auction_register.auction_id','=','tbl_auction.id')->where('auction_register.user_id',$user_id)->
        select('tbl_auction.*', 'auction_register.id as auction_register_id' ,'auction_register.approved as approved')->get()->toArray();
        return view('auction.user.registerations',$data);
    }

    function placedBids(){
        $user_id = session('user_data')['user_id'];

        DB::statement("SET SESSION sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
        $data['lots'] = Lot::join('bids','bids.lot','=','tbl_lot.id')->where('bids.user_id', $user_id)
            ->where(function ($query) {
                $query->where('bids.status', 'leading')
                    ->orWhere('bids.status', 'outbid');
            })
            ->select('tbl_lot.*', 'bids.status as bid_status', 'bids.bid_amount')
            ->orderBy('bids.bid_amount', 'desc')
            ->groupBy('tbl_lot.id')
            ->get()
            ->toArray();
    return view('auction.user.placeBids',$data);
    }

    function wonLots(){
        $user_id = session('user_data')['user_id'];

        DB::statement("SET SESSION sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
        $data['lots'] = Lot::join('bids','bids.lot','=','tbl_lot.id')->where(['bids.user_id'=> $user_id,'bids.status'=>'won'])
            ->select('tbl_lot.*', 'bids.status as bid_status', 'bids.bid_amount')
            ->groupBy('tbl_lot.id')
            ->get()
            ->toArray();
         return view('auction.user.wonLots',$data);
    }

    function lostLots(){
        $user_id = session('user_data')['user_id'];

        DB::statement("SET SESSION sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
        $data['lots'] = Lot::join('bids','bids.lot','=','tbl_lot.id')->where(['bids.user_id'=> $user_id,'bids.status'=>'lost'])
            ->select('tbl_lot.*', 'bids.status as bid_status', 'bids.bid_amount')
            ->groupBy('tbl_lot.id')
            ->get()
            ->toArray();
         return view('auction.user.lostLots',$data);
    }

    function watchlist(Request $request){
        $data['lots'] = Watchlist::join('tbl_lot','tbl_lot.id','=','watchlist.lot_id')
        ->where('user_id',session('user_data')['user_id'])
        ->select('tbl_lot.*')
        ->get();
        return view('auction.user.watchlist',$data);
    }

    function addIntoWatchlist(Request $request){
        $userId = session('user_data')['user_id'];
        $lotId = $request->lot_id;  

        $watchlistItem = Watchlist::where('user_id', $userId)
                                ->where('lot_id', $lotId)
                                ->first();

        if ($watchlistItem) {
            $watchlistItem->delete();
            return response()->json(['message' => 'Lot removed from watchlist']);
        } else {
            Watchlist::create([
                'user_id' => $userId,
                'lot_id' => $lotId,
            ]);
            return response()->json(['message' => 'Lot added to watchlist']);
        }
    }

    
    
}
