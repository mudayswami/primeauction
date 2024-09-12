<?php

namespace App\Http\Controllers;

use App\Mail\VerifyMail;
use App\Mail\WonLotMail;
use Illuminate\Http\Request;
use App\Models\User;
use Mail;
use Str;
use App\Models\Order;

class MailController extends Controller
{
    //
    function verifyMail(Request $request){
        $user = User::where('user_id',session('user_data')['user_id'])->get()->first();
        if($user->verified == 1){
            return redirect('/');
        }
        $user->remember_token = Str::random(32);
        $user->save();        
        $data = [
            'name' => $user->first_name,
            'token' => $user->remember_token,
        ];
        Mail::to($user->email)->send(new VerifyMail($data));
        return redirect('account/profile')->with('status', 'An email has been sent to your email account.');
    }

    public function verify($token)
    {   
        $user = User::where('remember_token', $token)->first();
        if (!$user) {
            return redirect('account/profile')->with('error', 'Invalid verification token.');
        }
        session('user_data')['user_id'] = 1;
        $user->remember_token = null;  
        $user_data = session('user_data');
        $user_data['verified']     = $user->verified;
        session(['user_data'=>$user_data]);
        $user->save();
        return redirect('account/profile')->with('status', 'Your email has been verified!');
    }

    public function winnerMail(){
        $order = Order::with('auction')->with('lot')->with('user')->with('bid')->where('email_sent',0)->limit(1)->first();
        if($order){
        $order_id = $order->id;
        $data = [
            'name' => $order->user->first_name,
            'lot_image' => $order->lot->img,
            'lot_title' => $order->lot->title,
            'winning_bid' => $order->bid->bid_amount,
            'end_time' => $order->auction->end,
            'total_amount_due' => $order->final_amount,
            'buyers_premium' => $order->auction->buyer_premium,
            'vat_rate'  => $order->auction->vat_rate,
            'other_tax' => $order->auction->other_tax
        ];
        Mail::to($order->user->email)->send(new WonLotMail($data));
        $order = Order::find($order_id);
        $order->email_sent = 1;
        $order->save();
        return $data;
    }
    }
}
