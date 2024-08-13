<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class storeController extends Controller
{
    function home(){
        return view("store.home");
    }

    function products(Request $request){
        return view('store.products');
    }

    function department(Request $request){
        return view('store.department');
    }

    function aboutus(){
        return view('store.aboutus');
    }

    function item(){
        return view('store.item');
    }

    
}
