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

Route::get('/product-page/{id}', 'FrontEndController@product')-> name('product');

Route::get('/store', 'FrontEndController@store')-> name('store');

Route::get('/checkout', 'HomeController@checkout')-> name('checkout');

Route::get('/wishlist', 'HomeController@wishlist')-> name('wishlist');

Route::get('/information-page', 'FrontEndController@information')-> name('information');

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

	Route::resource('brand', 'Dashboard\BrandController', ['except' => ['show']]);
    Route::get('edit-brand/{id}', ['as' => 'brand.edit', 'uses' => 'Dashboard\BrandController@edit']);
    Route::put('edit-brand/{id}', ['as' => 'brand.update', 'uses' => 'Dashboard\BrandController@update']);
    Route::get('brand/{id}', ['as' => 'brand.delete', 'uses' => 'Dashboard\BrandController@delete']);

	Route::resource('category', 'Dashboard\CategoryController', ['except' => ['show']]);
    Route::get('edit-category/{id}', ['as' => 'category.edit', 'uses' => 'Dashboard\CategoryController@edit']);
    Route::put('edit-category/{id}', ['as' => 'category.update', 'uses' => 'Dashboard\CategoryController@update']);
    Route::get('category/{id}', ['as' => 'category.delete', 'uses' => 'Dashboard\CategoryController@delete']);

    Route::resource('subcategory', 'Dashboard\SubcategoryController', ['except' => ['show']]);
    Route::get('edit-subcategory/{id}', ['as' => 'subcategory.edit', 'uses' => 'Dashboard\SubcategoryController@edit']);
    Route::put('edit-subcategory/{id}', ['as' => 'subcategory.update', 'uses' => 'Dashboard\SubcategoryController@update']);
    Route::get('subcategory/{id}', ['as' => 'subcategory.delete', 'uses' => 'Dashboard\SubcategoryController@delete']);

    Route::resource('coupon', 'Dashboard\CouponController', ['except' => ['show']]);
    Route::get('edit-coupon/{id}', ['as' => 'coupon.edit', 'uses' => 'Dashboard\CouponController@edit']);
    Route::put('edit-coupon/{id}', ['as' => 'coupon.update', 'uses' => 'Dashboard\CouponController@update']);
    Route::get('coupon/{id}', ['as' => 'coupon.delete', 'uses' => 'Dashboard\CouponController@delete']);

    Route::resource('courier', 'Dashboard\CourierController', ['except' => ['show']]);
    Route::get('edit-courier/{id}', ['as' => 'courier.edit', 'uses' => 'Dashboard\CourierController@edit']);
    Route::put('edit-courier/{id}', ['as' => 'courier.update', 'uses' => 'Dashboard\CourierController@update']);
    Route::get('courier/{id}', ['as' => 'courier.delete', 'uses' => 'Dashboard\CourierController@delete']);

    Route::resource('image', 'Dashboard\ImageController', ['except' => ['show']]);
    Route::get('edit-image/{id}', ['as' => 'image.edit', 'uses' => 'Dashboard\ImageController@edit']);
    Route::put('edit-image/{id}', ['as' => 'image.update', 'uses' => 'Dashboard\ImageController@update']);
    Route::get('image/{id}', ['as' => 'image.delete', 'uses' => 'Dashboard\ImageController@delete']);

    Route::resource('order', 'Dashboard\OrderController', ['except' => ['show']]);
    Route::get('edit-order/{id}', ['as' => 'order.edit', 'uses' => 'Dashboard\OrderController@edit']);
    Route::put('edit-order/{id}', ['as' => 'order.update', 'uses' => 'Dashboard\OrderController@update']);

    Route::resource('product', 'Dashboard\ProductController', ['except' => ['show']]);
    Route::get('edit-product/{id}', ['as' => 'product.edit', 'uses' => 'Dashboard\ProductController@edit']);
    Route::put('edit-product/{id}', ['as' => 'product.update', 'uses' => 'Dashboard\ProductController@update']);
    Route::get('product/{id}', ['as' => 'product.delete', 'uses' => 'Dashboard\ProductController@delete']);

    Route::resource('showcase', 'Dashboard\ShowcaseController', ['except' => ['show']]);
    Route::get('edit-showcase/{id}', ['as' => 'showcase.edit', 'uses' => 'Dashboard\ShowcaseController@edit']);
    Route::put('edit-showcase/{id}', ['as' => 'showcase.update', 'uses' => 'Dashboard\ShowcaseController@update']);
    Route::put('add-product-showcase/{id}', ['as' => 'showcase.addProduct', 'uses' => 'Dashboard\ShowcaseController@addProduct']);
    Route::get('showcase/{id}', ['as' => 'showcase.delete', 'uses' => 'Dashboard\ShowcaseController@delete']);
    Route::get('delete-product-showcase/{id}/{productId}', ['as' => 'showcase.deleteProduct', 'uses' => 'Dashboard\ShowcaseController@deleteProduct']);

    Route::resource('stock', 'Dashboard\StockController', ['except' => ['show']]);
    Route::get('edit-stock/{id}', ['as' => 'stock.edit', 'uses' => 'Dashboard\StockController@edit']);
    Route::put('edit-stock/{id}', ['as' => 'stock.update', 'uses' => 'Dashboard\StockController@update']);
    Route::get('stock/{id}', ['as' => 'stock.delete', 'uses' => 'Dashboard\StockController@delete']);

    Route::resource('box', 'Dashboard\BoxController', ['except' => ['show']]);
    Route::get('edit-box/{id}', ['as' => 'box.edit', 'uses' => 'Dashboard\BoxController@edit']);
    Route::put('edit-box/{id}', ['as' => 'box.update', 'uses' => 'Dashboard\BoxController@update']);

    Route::resource('information', 'Dashboard\InformationController', ['except' => ['show']]);
    Route::get('edit-information/{id}', ['as' => 'information.edit', 'uses' => 'Dashboard\InformationController@edit']);
    Route::put('edit-information/{id}', ['as' => 'information.update', 'uses' => 'Dashboard\InformationController@update']);
});


