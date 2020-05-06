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

Route::get('/checkout', 'HomeController@checkout')-> name('checkout');

Route::get('/wishlist', 'HomeController@wishlist')-> name('wishlist');

Route::get('/information', 'FrontEndController@page')-> name('information');

Route::get('/myaccount', 'HomeController@page')-> name('myaccount');

Route::get('/myorder', 'AccountController@order')-> name('myorder');

Route::get('/address', 'HomeController@page')-> name('address');

Route::get('/cart', 'HomeController@page')-> name('cart');

Route::get('/trackMyOrder/{id}', 'AccountController@trackMyOrder')-> name('trackMyOrder');

Route::get('/paymentOptions', 'HomeController@page')-> name('paymentOptions');

Route::get('/security', 'HomeController@page')-> name('security');

Route::get('/order-details/{id}', 'AccountController@orderDetails')-> name('order-details');

Route::get('/hotDeal-shop/{id}', 'FrontEndController@hotDeal')-> name('hotDeal-shop');

Route::post('/security/modify', 'AccountController@modify')-> name('modify');
Route::post('/security/save', 'AccountController@save')-> name('save');

Route::get('/addAddress/{id}', 'AccountController@addAddress')-> name('addAddress');
Route::post('/addAddress/{id}/save', 'AccountController@saveAddress')-> name('saveAddress');
Route::get('/address/delete/{id}', 'AccountController@deleteAddress')-> name('deleteAddress');

Route::get('/addCreditCard/{id}', 'AccountController@addCreditCard')-> name('addCreditCard');
Route::post('/addCreditCard/{id}/save', 'AccountController@saveCreditCard')-> name('saveCreditCard');
Route::get('/paymentOptions/delete/{id}', 'AccountController@deleteCreditCard')-> name('deleteCreditCard');

Route::post('/checkout/{id}/save', 'HomeController@saveCart')-> name('saveCart');

Route::get('wishlist/delete/{id}', 'HomeController@deleteWishlist')->name('deleteWishlist');
Route::get('wishlist/add/{id}', 'HomeController@addWishlist')->name('addWishlist');

Route::get('cart/delete/{id}', 'HomeController@deleteCart')->name('deleteCart');
Route::post('cart/add/{id}', 'HomeController@addToCart')->name('addToCart');

Route::post('/addReview', 'FrontEndController@addReview')-> name('addReview');
Route::post('/addQuestion', 'FrontEndController@addQuestion')-> name('addQuestion');
Route::post('/addAnswer', 'FrontEndController@addAnswer')-> name('addAnswer');

Route::get('/sizeColor', 'FrontEndController@sizeColor')-> name('sizeColor');
Route::get('/availability', 'FrontEndController@availability')-> name('availability');

Route::get('/cart/update-quantity/{id}/{quantity}','HomeController@updateCartQuantity');

Route::post('checkout/addOrder', 'HomeController@addOrder')->name('addOrder');

Route::post('/checkout/apply-coupon','HomeController@applyCoupon');
