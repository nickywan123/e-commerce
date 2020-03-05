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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');







// return registration form for dealer

Route::get('/registrations/dealer', function () {

    return view('registrations.dealer');
});






Route::prefix('dashboard')->group(function () {

    // Route for panel.
    Route::prefix('panel')->group(function () {
        // Return index home page for panel.
        Route::get('/', 'Panel\DashboardController@index');
        // Update order information (delivery date and order status)
        Route::put('/update-order-information/{id}', 'Order\OrderController@update')->name('update.order');

        // Return product upload page for panel
        Route::get('/product', 'Panel\DashboardController@productForm')->name('upload.product');

        // Return product uploaded by panel
        Route::post('/update-product-information', 'Product\ProductController@store')->name('post_upload.product');
    });

    Route::prefix('dealer')->group(function () {

        Route::get('/', 'Dealer\DashboardController@index')->name('dealer');

        Route::get('/statements', 'Dealer\DashboardController@statements');

        Route::get('/invoice', 'Dealer\DashboardController@viewInvoice');

        Route::get('/purchase_order', 'Dealer\DashboardController@viewPurchaseOrder');
    });

    Route::prefix('admin')->group(function () {
    });
});





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
