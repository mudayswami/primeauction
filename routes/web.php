<?php

use App\Http\Controllers\auctionController;
use App\Http\Controllers\detailController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\storeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", [homeController::class,'index']);
Route::get("auction",[auctionController::class,'auction']);
Route::get("category",[auctionController::class,'category']);
Route::get("catalogue/{id}",[auctionController::class,"catalogue"]);
Route::get("bid",[auctionController::class,"bid"]);
Route::get("login",[userController::class,"login"]);
Route::get("signup",[userController::class,"signup"]);
Route::get("aboutus",[auctionController::class,"aboutus"]);
Route::get("store",[storeController::class,"home"]);
Route::get("store/products",[storeController::class,"products"]);
Route::get("store/item",[storeController::class,"item"]);
Route::get("store/department",[storeController::class,"department"]);
Route::get("store/aboutus",[storeController::class,"aboutus"]);

Route::get("dashboard",[dashboardController::class,"dashboard"]);
Route::get("faq",[detailController::class,"faqs"]);