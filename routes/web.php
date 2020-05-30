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

// Route::get('/', function () {
//     return view('welcome');
// });

/**
 * Dashboard index page
 */
Route::get('/', 'dashboardController@index')->name('/');

/**
 * Product Page
 */
Route::get('/product-page', 'productController@item')->name('product-item');

/**
 * About Page
 */
Route::get('/product-page')->name('about');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

// Route::get('/login-register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::get('/login-register', 'Auth\RegisterController@showRegistrationForm')->name('login_register');

Route::get('/verification-successful', function(){
    return view('email.email-verificationSuccess');
});

