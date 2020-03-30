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

Route::get('/', 'Guest\GuestController@index');

Route::get('/login', 'Auth\LoginController@showLoginForm');

// Temporarily only
Route::get('/invoice', function () {

    return view("backups.dashboard_receipts.invoice");
});

Route::get('/purchase-order', 'Panel\DashboardController@viewPurchaseOrder');
//Return Work In progress page
Route::view('/wip', 'errors.wip');
/** Author Nicholas
 * Hardcode (Temporarily) to show product category for each category
 */

Route::view('/category/bedsheet-mattress', 'shop.catalog.backups.bedsheet-mattress');

Route::view('/category/curtain', 'shop.catalog.backups.curtain');
Route::view('/category/curtain/pinch-pleat', 'shop.catalog.backups.pinch-pleat');
Route::view('/category/bedsheet-mattress/canopy-bed', 'shop.catalog.backups.canopy-bed');

/**
 * Temporary routes.
 */
Route::get('/management/administrator/user/panel', 'Administrator\User\PanelController@index');

/**
 * Real routes.
 */
// Authentication routes. Verification is set to true.
Auth::routes(['verify' => true]);

/**
 * Any routes that needs a user to be logged in with a verified account,
 * place under this group.
 */
Route::group(['middleware' => ['auth', 'verified']], function () {

    // Management
    Route::group(['prefix' => 'management', 'middleware' => ['role:dealer|panel|administrator']], function () {

        // Dashboard-Panel
        Route::get('/panel', 'Management\ManagementController@index')->name('management.home');
        Route::get('/orders/all', 'Management\ManagementController@allOrders');
        Route::get('/orders/open', 'Management\ManagementController@openOrders');
        Route::get('/orders/in-progress', 'Management\ManagementController@inProgressOrders');
        Route::get('/orders/delivered', 'Management\ManagementController@deliveredOrders');
        Route::get('/orders/completed', 'Management\ManagementController@completedOrders');
        Route::get('/orders/cancelled', 'Management\ManagementController@cancelledOrders');
        Route::get('/panel/person-in-charge', 'Management\ManagementController@personInCharge');

        // Temp statement layout
        Route::view('/statement', 'management.panel.statement');

        //Dashboard-Dealer (Group them in future)
        Route::get('/dealer', 'Management\ManagementController@index_dealer');
        Route::get('/profile', 'Management\ManagementController@profile');
        Route::get('/password', 'Management\ManagementController@modifyPassword');
        Route::get('/statements', 'Management\ManagementController@statements');

        // Product Management
        Route::group(
            ['prefix' => 'product', 'middleware' => ['permission:view all products|create a product|edit a product']],
            function () {

                // List Product
                Route::get('/', 'Management\ProductManagementController@index')->name('management.product');

                // Create Product
                Route::get(
                    '/create',
                    'Management\ProductManagementController@create'
                )->name('management.product.create');

                // Store Product
                Route::post('/store', 'Management\ProductManagementController@store');

                // Edit Product
                Route::get('/edit/{id}', 'Management\ProductManagementController@edit');
            }
        );

        // Administrator
        Route::group(['prefix' => 'administrator', 'middleware' => ['role:administrator']], function () {
            // User management.
            Route::group(['prefix' => 'user', 'middleware' => ['permission:manage users']], function () {
                // Panel.
                Route::group(['prefix' => 'panel'], function () {
                    // Index.
                    Route::get('/', 'Administrator\User\PanelController@index')
                        ->name('management.user.panel');

                    // Create.
                    Route::get('/create', 'Administrator\User\PanelController@create')
                        ->name('management.user.panel.create');

                    // Store.
                    Route::post('/store', 'Administrator\User\PanelController@store')
                        ->name('management.user.panel.store');
                });
            });
        });
    });
    // End Management

    // Shop
    Route::group(['prefix' => 'shop'], function () {
        // Home/Index page for shop.
        Route::get('/', 'Shop\ShopController@index')->name('shop.index');

        Route::group(['prefix' => 'category'], function () {
            Route::get('/{topLevelCategorySlug}', 'Shop\ShopController@topLevelCategory')->name('shop.category.first');

            Route::get('/{topLevelCategorySlug}/{secondLevelCategorySlug}', 'Shop\ShopController@secondLevelCategory')->name('shop.category.second');

            Route::get('/{topLevelCategorySlug}/{secondLevelCategorySlug}/{thirdLevelCategory}', 'Shop\ShopController@thirdLevelCategory')->name('shop.category.third');
        });

        Route::get('/product/{productNameSlug}', 'Shop\ShopController@product')->name('shop.product');

        Route::group(['prefix' => 'cart'], function () {
            Route::get('/', 'Shop\CartController@index');

            // POST route for adding item to cart.
            Route::post('/add-item', 'Shop\CartController@store')->name('shop.cart.add-item');

            // DELETE route for deleting cart item.
            Route::put('/delete-item/{id}', 'Shop\CartController@destroy')->name('shop.cart.delete-item');

            // Checkout cart items.
            Route::post('/checkout', 'Purchase\PurchaseController@checkoutItems');
        });

        Route::group(['prefix' => 'wishlist'], function () {
            Route::get('/', 'Development\ComingSoonController@index');
        });

        // Order
        Route::prefix('order')->group(function () {
            // Order history page.
            Route::get('/', 'Shop\OrderController@index')->name('shop.order');

            // POST route for checking out cart item and placing order.
            Route::post('/checkout', 'Shop\OrderController@store')->name('shop.order.checkout');
        });
        // End Order
    });
    // End Shop

    // Web
    Route::group(['prefix' => 'web'], function () {
        Route::group(['prefix' => 'cart'], function () {
            // Get user's cart items.
            Route::get('/', 'WEB\Shop\CartController@index');

            // Remove user's cart item.
            Route::put('/remove/{id}', 'WEB\Shop\CartController@remove');
        });

        Route::group(['prefix' => 'shop'], function () {
            // Get category.
            Route::get('/category/{categorySlug}', 'WEB\Shop\ShopController@category')
                ->name('web.shop.category');

            // Get product.
            Route::get('/product/{productSlug}', 'WEB\Shop\ShopController@product')
                ->name('web.shop.product');

            // Product filter.
            Route::post('/product/{productSlug}', 'WEB\Shop\ShopController@productFilter')
                ->name('web.shop.product.filter');
        });
    });
    // End Web
});

/**
 * Guest Routes
 */
Route::get('/register-dealer', 'Auth\RegisterController@showDealerRegistrationForm');
Route::get('/register-panel', 'Auth\RegisterController@showPanelRegistrationForm');
