<?php

namespace App\Http\Controllers;

use App\Mail\VerifyMail;
use Illuminate\Http\Request;
use App\Models\User;
use Mail;
use Str;

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
        $user_data['verified']      = $user->verified;
        session()->put($user_data,'user_data');
        $user->save();
        return redirect('account/profile')->with('status', 'Your email has been verified!');
    }
}
