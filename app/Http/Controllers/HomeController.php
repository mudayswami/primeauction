<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auction;
use App\Models\AuctionCategory;

class homeController extends Controller
{
    public function index(){
        $data['auctions']    = Auction::select('id','img','title','start')->orderBy('start','desc')->get();
        $data['categories'] = AuctionCategory::getActiveCategories();

        return view('auction.mainPage',$data);
    }
}
