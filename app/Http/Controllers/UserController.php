<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Support\Facades\LoginRequest;


class userController extends Controller
{
    function login()
    {
        return view('auction.login');
    }

    function signup()
    {
        return view('auction.signup');
    }

    function create_user(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'fname' => ['required', 'max:255'],
            'lname' => ['required', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required'],
            'town' => ['required', 'string', 'max:255'],
            'country' => ['required'],
            'pcode' => ['required'],
            'phcountry' => ['required', 'integer'],
            'phone_number' => ['required', 'integer'],
            'entity' => ['required'],
        ]);
        $address = "";
        if (isset($request->addressline1)) {
            $address = $request->addressline1;
        }
        if (isset($request->addressline2)) {
            $address = $address . " , " . $request->addressline2;
        }
        if (isset($request->addressline3)) {
            $address = $address . " , " . $request->addressline3;
        }
        $userid = uniqid();
        $user = User::create([
            'user_id' => $userid,
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $address,
            'town' => $request->town,
            'post_code' => $request->pcode,
            'country' => $request->country,
            'phone_country' => $request->phcountry,
            'phone_number' => $request->phone_number,
            'seller' => $request->input('seller', 0),
            'photo_id' => $request->photo_id,
            'address_proof' => $request->address_proof,
            'entity' => $request->input('entity', 0),
            'company' => $request->company,
            'vat_number' => $request->vat_number,
            'subscribe' => $request->subscribe,
            'interested_category' => json_encode($request->categories)
        ]);

        Auth::login($user);
        $user_data['user_id'] = $user->user_id;
        $user_data['first_name'] = $user->first_name;
        $user_data['last_name'] = $user->last_name;
        $user_data['email'] = $user->email;
        $user_data['phone_number'] = $user->phone_number;
        session()->put('user_data', $user_data);
        return redirect('/');
    }

    function sign_in(request $request)
    {
        // if(Auth::check()){
        //     return redirect('/');
        // }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            if(!isset($user->stripe_id)){
                $stripeSecretKey = env('STRIPE_SECRET');
                $YOUR_DOMAIN = url('/');;
                $stripe =  new \Stripe\StripeClient($stripeSecretKey);
                $customer = $stripe->customers->create([
                    'email' => $user->email,
                    'name' => $user->first_name." ".$user->last_name,
                ]);
                $user->stripe_id = $customer->id;
                $user->save();
            }
            $user_data['user_id']       = $user->user_id;
            $user_data['verified']      = $user->verified;
            $user_data['first_name']    = $user->first_name;
            $user_data['last_name']     = $user->last_name;
            $user_data['email']         = $user->email;
            $user_data['phone_number']  = $user->phone_number;
            session()->put('user_data', $user_data);
            return redirect('dashboard');
        } else {
            return back()->withErrors("Email or Password doesn't match");
        }

    }

    function logout(request $request)
    {

        Auth::logout();
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect('login');
    }
}
