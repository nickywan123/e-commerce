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

// Shop Routes
Route::prefix('shop')->group(function () {
    // Home/Index page for shop.
    Route::get('/', 'Shop\ShopController@index')->name('shop.index');

    // Category page for shop. Displays products related to selected category.
    // Accepts slugged category name or slugged subcategory name.
    Route::get('/category/{categorySlug}', 'Shop\ShopController@category')->name('shop.category');

    // Subcategory page for shop. Displays products related to the selected product type.
    Route::get(
        '/category/{categorySlug}/{subcategorySlug}',
        'Shop\ShopController@subcategory'
    )->name('shop.category.subcategory');

    // Product type page for shop. Displays products related to the selected product type.
    Route::get(
        '/category/{categorySlug}/{subcategorySlug}/{productTypeSlug}',
        'Shop\ShopController@productType'
    )->name('shop.category.subcategory.type');

    // Product page for shop. Display detailed info of the product.
    Route::get('/product/{productNameSlug}', 'Shop\ShopController@product')->name('shop.product');

    // Shopping cart page.
    Route::get('/shopping-cart', 'Shop\ShopController@shoppingCart')->name('shop.cart');

    // Add item to shopping cart (1 click/tap on category page)
    Route::get('/add-to-cart/{id}', 'Product\CartController@create')->name('shop.addtocart');
});

Auth::routes();
