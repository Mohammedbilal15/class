<?php

use Illuminate\Support\Facades\Route;
use App\Mail\SendEmailMailable;

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
Route::get('sendEmail',function(){
    Mail::to('mhdbilal@gmail.com')->send(new SendEmailMailable());
    return 'Email sent succesfully';
});
