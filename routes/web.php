<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuctionController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;



Route::get("/", [HomeController::class,'index']);


Route::get("auction",[AuctionController::class,'auction']);
Route::get("category",[AuctionController::class,'category']);
Route::get("catalogue/{id}",[AuctionController::class,"catalogue"]);
Route::get("bid/{id}",[AuctionController::class,"bid"])->middleware('auth');
Route::get("aboutus",[AuctionController::class,"aboutus"]);
Route::get("catalogue/{id}/register",[AuctionController::class,"registerToBid"])->middleware('auth');
Route::post("catalogue/{id}/register",[AuctionController::class,"auctionRegister"])->middleware('auth');
Route::post("bp",[AuctionController::class,"bidSet"]);
Route::post("wl",[AuctionController::class,"watchlist"]);

Route::get("store",[StoreController::class,"home"]);
Route::get("store/products",[StoreController::class,"products"]);
Route::get("store/item",[StoreController::class,"item"]);
Route::get("store/department",[StoreController::class,"department"]);
Route::get("store/aboutus",[StoreController::class,"aboutus"]);


Route::get("dashboard",[DashboardController::class,"dashboard"]);


Route::get("faq",[DetailController::class,"faqs"]);


Route::get("signup",[UserController::class,"signup"]);
Route::post("signup",[UserController::class,"create_user"]);
Route::get("login",[UserController::class,"login"])->name('login');
Route::post("login",[UserController::class,"sign_in"]);
Route::get("logout",[UserController::class,'logout']);


Route::get("account/profile",[AccountController::class,'myAccount'])->middleware('auth');
Route::post("update-profile",[AccountController::class,'updateProfile'])->middleware('auth');
Route::get("account/address",[AccountController::class,'address'])->middleware('auth');
Route::get("account/add-address",[AccountController::class,'addAddress'])->middleware('auth');
Route::post("add-address",[AccountController::class,"postAddress"])->middleware('auth');
Route::get('account/registeration',[AccountController::class,'registerations'])->middleware('auth');
Route::get('account/placed-bids',[AccountController::class,'placedBids'])->middleware('auth');
Route::get('account/won-lots',[AccountController::class,'wonLots'])->middleware('auth');
Route::get('account/lost-lots',[AccountController::class,'lostLots'])->middleware('auth');
Route::get('account/watchlist',[AccountController::class,'watchlist'])->middleware('auth');


Route::get('checkout/{id}',[PaymentController::class,'checkout'])->middleware('auth');
Route::get('store-payment-method',[PaymentController::class,'saveCard'])->middleware('auth');
Route::post('store-payment-method',[PaymentController::class,'setupIntent'])->middleware('auth');
Route::get('payment-sucess',[PaymentController::class,'paymentSuccess']);
Route::get('payment-failed',[PaymentController::class,'paymentFailed']);

