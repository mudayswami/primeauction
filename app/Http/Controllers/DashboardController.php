<?php

namespace App\Http\Controllers;

use App\Models\Bids;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    function dashboard(){
        return view("dashboard.home");
    }

    function paynow(Request $request){
        $user_id        = session('user_data')['user_id'];
        $data['bids']   = Bids::with('lots')->where(['user_id'=>$user_id,'bids.status'=>'won'])->orderBy('created_at','desc')->get();
        // dd($data);
        return view('dashboard.paynow',$data);
    }
    
}
