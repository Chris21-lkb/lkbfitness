<?php

use App\Http\Controllers\aboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\whatwedoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\learnmoreController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\aboutpagecontroller;
use App\Http\Controllers\successController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\gallinfoController;
use App\Http\Controllers\pictureController;
use App\Http\Controllers\programController;
use App\Http\Controllers\usermesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add', function(){
    return view('pages.add');
});

Route::get('/program', function(){
   return view('pages.program');
});

Route::post('add',[whatwedoController::class,'store']);
Route::get('home', [HomeController::class,'homepage']);
Route::get('about', [aboutpagecontroller::class,'aboutpage']);
Route::get('contact',[contactController::class,'index']);
Route::get('gallery',[pictureController::class,'index']);

Route::post('successAdd', [successController::class,'storekeys']);
Route::post('usermessage', [usermesController::class,'store']);
Route::post('addlearnmore',[learnmoreController::class,'addData']);
Route::post('addabout',[aboutController::class,'store']);
Route::post('addcontact',[contactController::class,'store']);
Route::post('addgallery',[pictureController::class,'store']);
Route::post('addprogram',[programController::class,'store']);

Route::post('addservice',[serviceController::class,'store']);
Route::post('addgalinfo',[gallinfoController::class,'store']);
