<?php

use Illuminate\Support\Facades\Route;
/*
 * Admin Route
*/

Route::prefix('admin')->group(function () {
    Route::middleware('auth:admin')->group(function () {
        //dashboard route
        Route::get('/', 'dashboardController@index');

        //Product route
        Route::resource('/product', 'ProductController');

        //Billings route
        Route::resource('/billings', 'BillingController');
        Route::get('/confirm/{id}', 'BillingController@confirm')->name('orders.confirm');
        Route::get('/pending/{id}', 'BillingController@pending')->name('orders.pending');
        //Category route
        Route::resource('/category', 'CategoryController');

        //Color route
        Route::resource('/color', 'ColorController');

        //Size route
        Route::resource('/size', 'SizeController');

        //feedbacks route
        Route::resource('/feedbacks', 'FeedbackController');


        //Order route
        Route::resource('/orders', 'OrderController');
        Route::get('/confirm/{id}', 'OrderController@confirm')->name('orders.confirm');
        Route::get('/pending/{id}', 'OrderController@pending')->name('orders.pending');

        //User route
        Route::resource('/users', 'UserController');
        Route::get('/active/{id}', 'UserController@active')->name('users.active');
        Route::get('/block/{id}', 'UserController@block')->name('users.block');

        //logout Route
        Route::get('/logout', 'AdminUserController@logout');
    });
    //Admin route
    Route::resource('/login', 'AdminUserController');
});

/* Front-end Route */

//Home Route
Route::resource('/', 'front\HomeController');

//User Rgestrition Route
Route::get('/user/register', 'front\RegisterController@index');
Route::post('/user/register', 'front\RegisterController@store');

//User Login Route
Route::get('/user/login', 'front\SessionController@index');
Route::post('/user/login', 'front\SessionController@store');
Route::get('/logout', 'front\SessionController@logout');


//User Profile Route
Route::get('/user/profile', 'front\UserProfileController@index');
Route::get('/user/order/{id}', 'front\UserProfileController@show');

//Product Profile Route
Route::get('/product/{id}', 'front\ProductController@index');

//Cart Route
Route::get('/cart', 'front\CartController@index');
Route::post('/cart', 'front\CartController@store')->name('cart');
Route::get('/cart/save/{id}', 'front\CartController@save')->name('cart.save');
Route::delete('/cart/destroy/{id}', 'front\CartController@destroy')->name('cart.destroy');

//Save Later Route
Route::get('/savelater/move/{id}', 'front\SaveLaterController@move')->name('savelater.move');
Route::delete('/savelater/destroy/{id}', 'front\SaveLaterController@destroy')->name('savelater.destroy');


Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {
    //Check Out Route
    Route::get('/checkout', 'front\CheckoutController@index');
    Route::post('/checkout/charge', 'front\CheckoutController@store')->name('checkout');
});
