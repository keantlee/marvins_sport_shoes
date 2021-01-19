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

Route::get('/', function () {
    return view('welcome');
});

/**
 * Index page
 */
Route::get('/home', 'dashboardController@index')->name('home');

/**
 * Product Page
 */
// Route::get('/product-page/all-products', 'ShoesController@show_allShoeItems')->name('all-product-item');
// Route::get('/product-page/{id?}/{brand_name?}', 'ShoeController@show_brand_Items')->name('shoe-brand');

Route::get('/home/product-page/jordan', 'ShoeController@jordan_Items')->name('jordan-shoe');
// Route::get('/product-page/kobe', 'ShoeController@kobe_Items')->name('kobe-shoe');
// Route::get('/product-page/nike', 'ShoeController@nike_Items')->name('nike-shoe');


/**
 * Admin Access
 */
  /*== Admin: Dashboard ==*/
    Route::get('/home/dashboard/admin/main', 'adminController@admin_dashboard')->name('admin-main');
    Route::resource('/home/dashboard/admin/product-inventory', 'ShoeController');

  /*==  Admin: Show Registered Users ==*/ 
    // Route::get('', '')->name('');

  /*==  Admin: Order Form Status ==*/    
    // Route::get('', '')->name('');
 



/**
 * User Access (Buyer)
 */
  /*== User: Cart ==*/
    // Route::post('','')->name('user_add_to_cart');
    // Route::get('', '')->name('user_show_cart');
    // Route::delete('', '')->name('user_delete_item_cart');
    // Route::get('', '')->name('user_clear_all_item_cart');
    // Route::patch('', '')->name('user_update_item_cart');
  
  /*==  User: Checkout Form ==*/
    Route::get('/user/checkout_form', 'adminController@user_checkout_form')->name('view_checkout_form');

  /*== User: Order ==*/
    // Route::get('', '')->name('user_show_order_status');


/**
 * About Page
 */
Route::get('/product-page')->name('about');

