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
Auth::routes();

Route::get('/', 'FrontEndController@home')->name('home');

//Route::get('/', 'HomeController@index')->name('home');

Route::get('/product', 'FrontEndController@page')-> name('product');

Route::get('/store', 'FrontEndController@page')-> name('store');

Route::get('/checkout', 'HomeController@page')-> name('checkout');

Route::get('/wishlist', 'HomeController@page')-> name('wishlist');

Route::get('/information', 'FrontEndController@page')-> name('information');

Route::get('/myaccount', 'HomeController@page')-> name('myaccount');

Route::get('/myorder', 'HomeController@page')-> name('myorder');

Route::get('/address', 'HomeController@page')-> name('address');

Route::get('/cart', 'FrontEndController@page')-> name('cart');

Route::get('/trackMyOrder', 'HomeController@page')-> name('trackMyOrder');

Route::get('/addAddress', 'HomeController@page')-> name('addAddress');

Route::get('/paymentOptions', 'HomeController@page')-> name('paymentOptions');

Route::get('/addCreditcard', 'HomeController@page')-> name('addCreditcard');

Route::get('/security', 'HomeController@page')-> name('security');

Route::get('/order-details', 'HomeController@page')-> name('order-details');

Route::get('/hotdeals-shop', 'FrontEndController@page')-> name('hotdeals-shop');

