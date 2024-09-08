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
        return 1;
    }

    public function verify($token)
    {
        $user = User::where('remember_token', $token)->first();
        if (!$user) {
            return redirect('/')->with('error', 'Invalid verification token.');
        }
        $user->remember_token = null;  
        $user->verified = 1;
        $user->save();
        return redirect('/')->with('message', 'Your email has been verified!');
    }
}
