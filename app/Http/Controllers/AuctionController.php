<?php

namespace App\Http\Controllers;

use App\Mail\OutBidMail;
use App\Models\Auction;
use App\Models\Lot;
use Illuminate\Http\Request;
use App\Models\AuctionRegister;
use App\Models\AddressBook;
use App\Models\Bids;
use Auth;
use DB;
use Mail;
use App\Models\AuctionCategory;
class AuctionController extends Controller
{
    function auction(Request $request)
    {
        $data['auction']    = Auction::where('end','>=',date('Y-m-d H:i:s'))->get()->toArray();
        $data['category']   = AuctionCategory::all();
        return view("auction.mainAuction", $data);
    }

    function catalogue(Request $request, $id)
    {
        $data['auction'] = Auction::findOrFail($id)->toArray();
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
        $data['lot']                = Lot::with('auctionRegister')->where('id', $id)->get()->first();
        if(empty($data['lot'])){
            return redirect('auction');
        }
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
        $lot            = Lot::join('bids','bids.lot','=','tbl_lot.id')->where(['tbl_lot.id'=>$request->lot,'bids.status'=>'leading'])->select('tbl_lot.*', 'bids.status  as bid_status','bids.id as bid_id','bids.bid_amount as bid_amount')->orderBy('bid_amount','desc')->get()->toArray();
        if(!empty($lot)){

            if(($lot[0]['bid_amount'] + $lot[0]['next_bid']) > $request->bid){
                return 'smallBid';
            }
            $bids = Bids::with('user')->with('lots')->findOrFail($lot[0]['bid_id']);
            $bids->status = 'outbid';
            if($bids->user->user_id != $user_id){
            $dd = [
                'name' => $bids->user->first_name,
                'lot_title' => $bids->lots->title,
                'lot_image' => $bids->lots->img,
                'current_bid'=> $request->bid,
                'lot_id' => $bids->lots->id,
            ];
            Mail::to($bids->user->email)->send(new OutBidMail($dd));
            }
            $bids->save();

        }
        Bids::create([
            'user_id' => $user_id,
            'lot'   => $request->lot,
            'bid_amount' => $request->bid,
            'max_bid_amount' => $request->bid,
            'reserve_met' => (isset($lot[0]['reserve_bid']) && $request->bid >= $lot[0]['reserve_bid']) ? 1 : 0,
        ]);

        $data['user_bid']   = Bids::where(['user_id'=>$user_id,'lot'=>$request->lot])->orderBy('bid_amount','desc')->get()->toArray();
        $data['bids']       = Bids::where(['lot'=>$request->lot])->orderBy('bid_amount','desc')->get()->toArray();
        return $data;
    }


    function lotWinner(){
        $auctions = Auction::where('status',1)->where('end','<',date('Y-m-d H:i:s'))->get();
        DB::statement("SET SESSION sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
        foreach($auctions as $auction){
            $lots  = Lot::join('bids','bids.lot','=','tbl_lot.id')->where('tbl_lot.auction_id',$auction->id)->
            select('tbl_lot.*','bids.bid_amount','bids.status as  bid_status')->orderBy('bid_amount','desc')->groupBy('bids.lot')->get();  
            foreach($lots as $lot){
                $bids = Bids::where('lot',$lot->id)->get();
                foreach($bids as $bid){
                    if($bid->status == 'leading'){
                        $bid->status = 'won';
                    }else if($bid->status == 'outbid'){
                        $bid->status = 'lost';
                    }
                    $bid->save();
                }
            }
        }
    }

    function searchLot(Request $request){
        $data['lots'] = Lot::with('auction')->where('description','like','%'.$request->search.'%')->get();
        return view('auction.mainLot',$data);
    }

    
}
