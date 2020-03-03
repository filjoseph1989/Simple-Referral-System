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

Route::get('/', 'HomeController@index')->name('get.main');

/*
|--------------------------------------------------------------------------
| Get route
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for get methods
|
*/
Route::get('/home', 'DashboardController@index')->name('get.home')->middleware('auth');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('get.login.form');
Route::get('/signup', 'Auth\RegisterController@showRegistrationForm')->name('get.signup.form');
Route::get('/invite/{code}', 'ReferralController@index')->name('get.invite');
Route::get('/gift/card', 'GiftCardController@index')->name('get.gift.card');
Route::get('/gift/card/user', 'GiftCardUserController@index')->name('get.gift.card.user');
Route::get('/checkout/{item}/{id}', 'CheckoutController@index')->name('get.checkout.item');

/*
|--------------------------------------------------------------------------
| Post route
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for post methods
|
*/
Route::post('/login', 'Auth\LoginController@login')->name('post.login');
Route::post('/logout', 'Auth\LoginController@logout')->name('post.logout');
Route::post('/signup', 'Auth\RegisterController@register')->name('post.signup');
Route::post('/invite/send', 'ReferralController@send')->name('post.invite.send')->middleware('auth');
Route::post('/gift/card/store', 'GiftCardController@store')->name('post.gift.card');
Route::post('/checkout', 'CheckoutController@checkout')->name('post.checkout');
