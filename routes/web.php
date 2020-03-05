<?php

use App\Mail\OrderShipped;
use App\Jobs\Emails\Order\SendEmailOrderShipped;
use App\Jobs\Emails\Orders\NewOrderSendEmail;
use Carbon\Carbon;

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
    });

    Route::prefix('dealer')->group(function () {

        Route::get('/', 'Dealer\DashboardController@dashboard')->name('dealer');

        Route::get('/statements', 'Dealer\DashboardController@statements');

        Route::get('/invoice', 'Dealer\DashboardController@viewInvoice');

        Route::get('/purchase_order', 'Dealer\DashboardController@viewPurchaseOrder');
    });

    Route::prefix('admin')->group(function () {
    });
});




//return panel dashboard
Route::get('/dashboard/panel', function () {
    return view('panel.panel');
})->name('panel');

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

    // Cart prefix.
    Route::prefix('cart')->group(function () {
        // Shopping cart page.
        Route::get('/', 'Shop\CartController@index')->name('shop.cart');

        // POST route for adding item to cart.
        Route::post('/add-item', 'Shop\CartController@store')->name('shop.cart.add-item');

        // DELETE route for deleting cart item.
        Route::put('/delete-item/{id}', 'Shop\CartController@destroy')->name('shop.cart.delete-item');
    });

    // Order prefix.
    Route::prefix('order')->group(function () {
        // Order history page.
        Route::get('/', 'Shop\OrderController@index')->name('shop.order');

        // POST route for checking out cart item and placing order.
        Route::post('/checkout', 'Shop\OrderController@store')->name('shop.order.checkout');
    });
});

/**
 * Any routes that needs a user to be logged in with a verified account, 
 * place under this group.
 */
Route::group(['middleware' => ['auth', 'verified']], function () {
    //
});

Auth::routes(['verify' => true]);
