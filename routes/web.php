<?php

use Illuminate\Support\Facades\Route;

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





Route::get('paywithpaypal', array('as' => 'paywithpaypal','uses' => 'paypalPyamentewayConroller@payWithPaypal',));
Route::post('paypal', array('as' => 'paypal','uses' => 'paypalPyamentewayConroller@postPaymentWithpaypal',));
Route::get('paypal', array('as' => 'status','uses' => 'paypalPyamentewayConroller@getPaymentStatus',));