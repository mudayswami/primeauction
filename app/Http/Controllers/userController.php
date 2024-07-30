<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    function login(){
        return view('auction.login');
    }

    function signup(){
        return view('auction.signup');
    }
}
