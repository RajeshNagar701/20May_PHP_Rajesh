<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer_controller;

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
    return view('website.index');
});

Route::get('/cars', function () {
    return view('website.cars');
});

Route::get('/find', function () {
    return view('website.find');
});

Route::get('/feedback', function () {
    return view('website.feedback');
});


Route::get('/contact', function () {
    return view('website.contact');
});


/*
Route::get('/login', function () {
    return view('website.login');
});
*/

Route::get('/login',[Customer_controller::class,'login']);
Route::get('/signup',[Customer_controller::class,'store']);



