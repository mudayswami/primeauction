<?php

namespace App\Http\Controllers;

use App\Models\AddressBook;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

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
            'post_code' => ['required','integer','max:999999'],
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
}
