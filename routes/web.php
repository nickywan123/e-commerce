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
// View Test Routes
Route::prefix('view')->group(function () {
    Route::get('/', function () {
        return view('shop.index');
    });

    Route::get('/category', function () {
        return view('app.category');
    });
});

// Shop Routes
Route::prefix('shop')->group(function () {
    // Home/Index page for shop.
    Route::get('/', 'Shop\ShopController@index')->name('shop.index');

    // Category page for shop. Displays products related to selected category.
    Route::get('/category/{slug}', 'Shop\ShopController@category')->name('shop.category');
});


// Route::get('/', 'Product\ProductController@index')->name('shop.index');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
