<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\email_controller;
use App\Mail\Sendmail;

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

Route::get('/',[email_controller::class,'index']);
Route::post('/send_mail',[email_controller::class,'send']);
