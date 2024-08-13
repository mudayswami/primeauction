<?php

namespace App\Http\Controllers;

use App\Models\tbl_auction;
use App\Models\tbl_lot;
use Illuminate\Http\Request;

class auctionController extends Controller
{
    function auction(Request $request){
        $data['auction'] = tbl_auction::all()->toArray();
        return view("auction.mainAuction",$data);
    }

    function catalogue(Request $request, $id){
        $data['auction'] = tbl_auction::find($id)->toArray();
        $data['lots'] = tbl_lot::where('auction_id',$id)->get()->toArray();
        return view("auction.auctionCatalogue", $data);
    }

    function category(Request $request){
        return view("auction.category");
        
    }

    function bid(Request $request){
        return view("auction.bid");
    }
    function aboutus(Request $request){
        return view('auction.aboutus');
    }
}
