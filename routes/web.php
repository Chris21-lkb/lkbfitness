<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\whatwedoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\learnmoreController;
use App\Http\Controllers\serviceController;

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
//Route::get('/home', function(){
 //return view('pages.home');
//});
Route::get('/add', function(){
    return view('pages.add');
});
Route::post('add',[whatwedoController::class,'store']);
Route::get('home', [HomeController::class,'homepage']);

Route::post('addlearnmore',[learnmoreController::class,'addData']);

Route::post('addservice',[serviceController::class,'store']);
