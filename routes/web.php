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


Route::get('/login', 'HomeController@testlogin');

Route::view('register', 'register');
//Route::get('/login', 'LoginController@index')->name('login');

Route::view('Interface-login', 'Interface-login');
Route::view('Registration-interface', 'Registration-interface');
Route::view('CusStatus', 'CusStatus');
//Route::get('/home', 'UserInfo\orderconfirmation@home')->name('user_info');

// return view for dealer home page
Route::get('/dashboard/dealer', 'Dealer\DashboardController@dashboard')->name('dealer');




Route::get('/', 'User\CustomerInfo@viewUser');

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

    Route::prefix('cart')->group(function () {
        // POST route for adding item to cart.
        Route::post('/add-item', 'Shop\CartController@store')->name('shop.cart.add-item');
    });

    Route::prefix('order')->group(function () {
        // Order history page.
        Route::get('/', 'Shop\OrderController@index')->name('shop.order');

        // POST route for checking out cart item and placing order.
        Route::post('/checkout', 'Shop\OrderController@store')->name('shop.order.checkout');
    });
    Route::prefix('shopv2')->group(function () {
        // Order history page.
        Route::get('/')->name('/shopv2');

        // POST route for checking out cart item and placing order.
        // Route::post('/checkout', 'Shop\OrderController@store')->name('shop.order.checkout');
    });
});


Route::prefix('view')->group(function () {
    Route::get('/login', function () {
        return view('shopv2.login');
    });

    Route::get('/register', function () {
        return view('shopv2.register');
    });
});

Auth::routes();
