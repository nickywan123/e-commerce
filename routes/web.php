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
    // Accepts slugged category name or slugged subcategory name.
    Route::get('/category/{categoryNameSlug}', 'Shop\ShopController@category')->name('shop.category');

    // Product type page for shop. Displays products related to the selected product type.
    Route::get('/category/{categorySlug}/{productType}', 'Shop\ShopController@productType')->name('shop.product-type');

    // Product page for shop. Display detailed info of the product.
    Route::get('/product/{productNameSlug}', 'Shop\ShopController@product')->name('shop.product');

    // Shopping cart page.
    Route::get('/shopping-cart', 'Product\CartController@index')->name('shop.cart');

    // Add item to shopping cart (1 click/tap on category page)
    Route::get('/add-to-cart/{id}', 'Product\CartController@create')->name('shop.addtocart');
});


// Route::get('/', 'Product\ProductController@index')->name('shop.index');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
