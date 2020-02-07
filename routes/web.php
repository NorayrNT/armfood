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
// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/','IndexController@index');
// Route::post('/', "IndexController@resetPass");

Auth::routes();

Route::prefix("/")->group(function() {
    Route::get("","IndexController@index");
    Route::post('',"IndexController@resetPass");
});

Route::prefix('/bag')->group(function() {
    Route::get('', 'BagController@index');
    Route::post('add-bag/{id?}',"BagController@addBag");
    Route::post('del-bag/{id?}', "BagController@bagDel");
});

Route::prefix("/wishlist")->group(function() {
    Route::get('','WishlistController@index');
    Route::post('add-wish/{id?}','WishlistController@addWish');
});

Route::prefix('/account')->group(function () {
    Route::get('',"AccountController@index");
    Route::post('email',"AccountController@changeName");
    Route::post('password',"AccountController@changePass");
});

Route::get('/shop/{id?}', "ShopController@index");

Route::get('/product/{id}','ProductController@index');

Route::get('/armenia', 'ArmeniaController@index');


