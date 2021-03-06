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

Route::get('/', 'StoreController@index')->name('store.home');
Route::get('/products', 'StoreController@products')->name('store.products');
Route::get('/payment', 'StoreController@payment')->name('store.payment');
Route::middleware('auth')->get('/success', 'StoreController@success')->name('store.success');
Route::middleware('auth')->post('/add-to-cart', 'StoreController@addToCart')->name('add-to-cart');
Route::middleware('auth')->post('/checkout', 'StoreController@checkout')->name('checkout');
Route::post('/clear-cart', 'StoreController@clearCart')->name('clear-cart');
Route::post('/set-currency', 'StoreController@setUserCurrency')->name('set-currency');



//Auth::routes();

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
//$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
//$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
//$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
//$this->post('password/reset', 'Auth\ResetPasswordController@reset');
