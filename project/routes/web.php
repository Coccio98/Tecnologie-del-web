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

Route::get('/', 'FrontEndController@home')-> name('home');

Route::get('/product', 'FrontEndController@page')-> name('product');

Route::get('/store', 'FrontEndController@page')-> name('store');

Route::get('/checkout', 'FrontEndController@page')-> name('checkout');

Route::get('/wishlist', 'FrontEndController@page')-> name('wishlist');

Route::get('/information', 'FrontEndController@page')-> name('information');

Route::get('/myaccount', 'FrontEndController@page')-> name('myaccount');

Route::get('/myorder', 'FrontEndController@page')-> name('myorder');

Route::get('/address', 'FrontEndController@page')-> name('address');
