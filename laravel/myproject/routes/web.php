<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InvokableController;
use App\Http\Controllers\Customer_controller;
use App\Http\Controllers\adminController;


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

// Types of routes 

/*
// method 1 by function
Route::get('/', function () {
    return view('website.index');
});
*/

/*
// method 2 by controller Simple Controller
Route::get('/login',[Customer_controller::class,'login']);

*/


// method 2 by controller --invokable Controller
Route::get('/invoke',InvokableController::class);




Route::get('/', function () {
    return view('website.index');
});
Route::get('/index', function () {
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

// MAKE group middleware
Route::group(['middleware'=>['beforlogin']],function(){

Route::get('/signup',[Customer_controller::class,'create']);//->middleware('beforlogin');  // route middleware
Route::post('/signup_store',[Customer_controller::class,'store']);
Route::get('/login',[Customer_controller::class,'login']);
Route::post('/userlogin',[Customer_controller::class,'userlogin']);

});


Route::group(['middleware'=>['afterlogin']],function(){
	
	Route::get('/logout',[Customer_controller::class,'logout']);
	Route::get('/myprofile',[Customer_controller::class,'myprofile']);//->middleware('beforlogin');// route middleware
	Route::get('/myprofile/{id}',[Customer_controller::class,'edit']);
	Route::post('/myprofileupdate/{id}',[Customer_controller::class,'update']);
});

// admin
 Route::get('/admin',[adminController::class,'index']);
 Route::post('/admin_auth',[adminController::class,'login']);
 Route::view('/dashboard','admin.dashboard');
 Route::get('/admin_logout',[adminController::class,'admin_logout']);
 

 Route::get('/manage_customer',[Customer_controller::class,'index']);
 Route::get('/manage_customer/{id}',[Customer_controller::class,'destroy']);