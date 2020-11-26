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

Route::get('/cart', function () {
    return view('cart');
});

//route cua trang ban banh
Route::get('/ban-banh', function () {
    return view('ban-banh.index');
});

Route::get('/products', 'ProductController@getProducts');

















