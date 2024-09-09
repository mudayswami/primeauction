<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class detailController extends Controller
{
    function faqs(){
        return view("faqs");
    }

    function sellUs(){
        return view('auction.sellUs');
    }

    function aboutus(Request $request)
    {
        return view('auction.aboutus');
    }

    function imageUpload(Request $request){
        $path = $request->path;
        $file = $request->file('image');
        $storagePath = Storage::disk('primeauction')->put($path, $file);
        return response()->json(['storage_path' => $storagePath]);
    }

    function contactUs(){
        return view('contactUs');
    }
}
