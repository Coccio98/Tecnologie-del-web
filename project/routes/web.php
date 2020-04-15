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

Route::get('/product/{id}', 'FrontEndController@product')-> name('product');

Route::get('/store', 'FrontEndController@store')-> name('store');

Route::get('/checkout', 'HomeController@page')-> name('checkout');

Route::get('/wishlist', 'HomeController@page')-> name('wishlist');

Route::get('/information', 'FrontEndController@page')-> name('information');

Route::get('/myaccount', 'HomeController@page')-> name('myaccount');

Route::get('/myorder', 'HomeController@page')-> name('myorder');

Route::get('/address', 'HomeController@page')-> name('address');

Route::get('/cart', 'FrontEndController@page')-> name('cart');

Route::get('/trackMyOrder', 'HomeController@page')-> name('trackMyOrder');

Route::get('/paymentOptions', 'HomeController@page')-> name('paymentOptions');

Route::get('/security', 'HomeController@page')-> name('security');

Route::get('/order-details', 'HomeController@page')-> name('order-details');

Route::get('/hotdeals-shop', 'FrontEndController@page')-> name('hotdeals-shop');

Route::post('/security/modify', 'AccountController@modify')-> name('modify');
Route::post('/security/save', 'AccountController@save')-> name('save');

Route::get('/addAddress/{id}', 'AccountController@addAddress')-> name('addAddress');
Route::post('/addAddress/{id}/save', 'AccountController@saveAddress')-> name('saveAddress');
Route::get('/address/delete/{id}', 'AccountController@deleteAddress')-> name('deleteAddress');

Route::get('/addCreditCard/{id}', 'AccountController@addCreditCard')-> name('addCreditCard');
Route::post('/addCreditCard/{id}/save', 'AccountController@saveCreditCard')-> name('saveCreditCard');
Route::get('/paymentOptions/delete/{id}', 'AccountController@deleteCreditCard')-> name('deleteCreditCard');

Route::get('wishlist/delete/{id}', 'HomeController@deleteWishlist')->name('deleteWishlist');
Route::get('wishlist/add/{id}', 'HomeController@addWishlist')->name('addWishlist');
