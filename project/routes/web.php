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



Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'Dashboard\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'Dashboard\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'Dashboard\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'Dashboard\ProfileController@password']);

	Route::resource('brand', 'Dashboard\BrandController', ['except' => ['show']]);
    Route::get('edit-brand/{id}', ['as' => 'brand.edit', 'uses' => 'Dashboard\BrandController@edit']);

	Route::resource('category', 'Dashboard\CategoryController', ['except' => ['show']]);
    Route::get('edit-category/{id}', ['as' => 'category.edit', 'uses' => 'Dashboard\CategoryController@edit']);

    Route::resource('subcategory', 'Dashboard\SubcategoryController', ['except' => ['show']]);
    Route::get('edit-subcategory/{id}', ['as' => 'subcategory.edit', 'uses' => 'Dashboard\SubcategoryController@edit']);

    Route::resource('coupon', 'Dashboard\CouponController', ['except' => ['show']]);
    Route::get('edit-coupon/{id}', ['as' => 'coupon.edit', 'uses' => 'Dashboard\CouponController@edit']);

    Route::resource('courier', 'Dashboard\CourierController', ['except' => ['show']]);
    Route::get('edit-courier/{id}', ['as' => 'courier.edit', 'uses' => 'Dashboard\CourierController@edit']);

    Route::resource('image', 'Dashboard\ImageController', ['except' => ['show']]);
    Route::get('edit-image/{id}', ['as' => 'image.edit', 'uses' => 'Dashboard\ImageController@edit']);

    Route::resource('order', 'Dashboard\OrderController', ['except' => ['show']]);
    Route::get('edit-order/{id}', ['as' => 'order.edit', 'uses' => 'Dashboard\OrderController@edit']);

    Route::resource('product', 'Dashboard\ProductController', ['except' => ['show']]);
    Route::get('edit-product/{id}', ['as' => 'product.edit', 'uses' => 'Dashboard\ProductController@edit']);

    Route::resource('showcase', 'Dashboard\ShowcaseController', ['except' => ['show']]);
    Route::get('edit-showcase/{id}', ['as' => 'showcase.edit', 'uses' => 'Dashboard\ShowcaseController@edit']);

    Route::resource('stock', 'Dashboard\StockController', ['except' => ['show']]);
    Route::get('edit-stock/{id}', ['as' => 'stock.edit', 'uses' => 'Dashboard\StockController@edit']);
});


