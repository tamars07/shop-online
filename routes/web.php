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

Route::get('/','ProductController@index');

Route::get('/signin','UserController@signin');

Route::get('/signup','UserController@signup');

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/products/{id_type}', 'ProductController@getProducts');

//Day la noi dung chinh sua tren branch
//Console.writeln("Day la Hung map");
//System.out.println("Hung map");
//cout<<"Hung map";
//print("Hung map")

//Day la bai cua Pham Truong Gia Huy
//System.out.println("Day la dai tieng noi Viet Nam");
//Console.writeln("Duoc phat thanh tu Ha Noi");
//cout<<"Thu do nuoc CHXHCN Viet Nam";














