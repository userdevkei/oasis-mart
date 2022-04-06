<?php

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

Route::get('/', ['uses' => 'IndexController@index', 'as' => 'index']);

/*----------  users ------------------------*/

/*----------  customer ------------------------*/

Route::get('/user/dashboard', 'HomeController@customer');
Route::get('/user/profile', 'UserController@profile');
Route::get('/user/subscription', 'UserController@subscription');
Route::get('/user/order', 'UserController@order');
Route::get('/user/wishlist', 'UserController@wishlist');
Route::get('/user/reset-pwd', 'UserController@resetpwd');

/*----------  Admin ------------------------*/

Route::get('/admin/dashboard', 'HomeController@admin');
Route::get('/admin/profile', 'UserController@admin_profile');
Route::get('/admin/subscription', 'UserController@a_subscription');
Route::get('/admin/order', 'UserController@admin_order');
Route::get('/admin/reset-pwd', 'UserController@admin_resetpwd');


/*----------  Merchant ------------------------*/

Route::get('/merchant', 'HomeController@merchant');
Route::get('/admin/dashboard', 'HomeController@admin');
Route::get('/admin/profile', 'UserController@admin_profile');
Route::get('/admin/subscription', 'UserController@admin_subscription');
Route::get('/admin/order', 'UserController@admin_order');
Route::get('/admin/reset-pwd', 'UserController@admin_resetpwd');

/* ------ product routes ---------*/

Route::resource('/product', 'ProductController');
Route::get('/product/add_cart/{id}','ProductController@cart');
Route::get('/cart/viewCart', ['uses' => 'ProductController@viewCart', 'as' => 'viewCart']);
Route::get('/cart/remove_item/{id}', ['uses' => 'ProductController@removeitem', 'as' => 'removeItem']);


/*----------- services Routes --------------*/
Route::resource('/services', 'ServicesController');


/*----------- Classifieds Routes --------------*/
Route::resource('/classifieds', 'ClassfiedsController');

/*----------- Categories Routes --------------*/
Route::resource('/categories', 'CategoryController');
