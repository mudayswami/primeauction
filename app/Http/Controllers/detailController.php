<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detailController extends Controller
{
    function faqs(){
        return view("faqs");
    }
}
