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

// Route for QR Code

use Illuminate\Http\Request;

Route::get('qr-code-g', function () {
    QrCode::size(500)
        ->format('png')
        ->generate('ItSolutionStuff.com', public_path('images/qrcode.png'));

    return view('qr.qrCode');
});

//Show order confirmation when customer scan QR (invoice)
Route::get('/orders/confirm/{purchase_num}', 'Order\OrderController@show')
    ->name('confirm-order')
    ->middleware('signed');

//Route to finalize order status to deliver state once customer scan the QR
//   Route::get('/QR-Completed','SomeControllerMethod');

// Return invoice 
Route::get('/shop/invoice', 'Purchase\PurchaseController@invoiceCustomer');

// Return invoice in customer dashboard (Orders) 
Route::get('/orders/invoice/{purchase_num}', 'Purchase\PurchaseController@invoice');

//Return receipt in customer dashboard(Receipt)

Route::get('/orders/receipt/{purchase_num}', 'Purchase\PurchaseController@receipt');

Route::get('/purchase-order', 'Panel\DashboardController@viewPurchaseOrder');
//Return Work In progress page
Route::view('/wip', 'errors.wip');
/** Author Nicholas
 * Hardcode (Temporarily) to show product category for each category
 */

// Route::view('/category/bedsheet-mattress', 'shop.catalog.backups.bedsheet-mattress');

// Route::view('/category/curtain', 'shop.catalog.backups.curtain');
// Route::view('/category/curtain/pinch-pleat', 'shop.catalog.backups.pinch-pleat');
// Route::view('/category/bedsheet-mattress/canopy-bed', 'shop.catalog.backups.canopy-bed');

/**
 * Temporary routes.
 */
Route::get('/management/administrator/user/panel', 'Administrator\User\PanelController@index');
Route::get('/shop/purchase-order', 'Panel\DashboardController@viewPurchaseOrder');
//Return Work In progress page
Route::view('/wip', 'errors.wip');

/**
 * Real routes.
 */

/**
 * Guests Routes.
 */
Route::group(['middleware' => ['guest']], function () {
    // Landing page.
    Route::get('/', 'Guest\GuestController@index');

    // Login page.
    Route::get('/login', 'Auth\LoginController@showLoginForm');

    // Registration page.
    Route::get('/register-dealer', 'Auth\RegisterController@showDealerRegistrationForm');
    Route::get('/register-panel', 'Auth\RegisterController@showPanelRegistrationForm');
});

/**
 * Public Signed Routes.
 */
Route::get('/order-received/{orderNum}', 'Purchase\PurchaseController@qrScanned')
    ->name('guest.order-received')
    ->middleware('signed');

/**
 * Public Routes.
 */
Route::post('/order-received', 'Purchase\PurchaseController@qrSubmit')
    ->name('guest.order-received.post');

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
        Route::get('/panel/orders', 'Management\ManagementController@index')->name('management.home');
        Route::put('/panel/update-order/{order_num}','Management\ManagementController@updateOrder')->name('update.order.panel');
        Route::get('/panel/company-profile', 'Management\ManagementController@companyProfile')->name('management.company.profile');
        Route::get('/panel/change-password', 'Management\ChangePasswordController@index');
        Route::post('/panel/change-password', 'Management\ChangePasswordController@store')->name('change.password');

        Route::get('/panel/orders/purchase-order-pdf/{order_num}', 'Management\ManagementController@viewPurchaseOrder');
        
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

            Route::get(
                '/{topLevelCategorySlug}/{secondLevelCategorySlug}',
                'Shop\ShopController@secondLevelCategory'
            )->name('shop.category.second');

            Route::get(
                '/{topLevelCategorySlug}/{secondLevelCategorySlug}/{thirdLevelCategory}',
                'Shop\ShopController@thirdLevelCategory'
            )->name('shop.category.third');
        });
  
        Route::get('/dashboard/profile/index', 'Shop\ProfileController@index')->name('shop.dashboard.customer.profile');
        // Return Customer ->Value Records -> All Orders
        Route::get('/dashboard/orders/index', 'Shop\OrderController@customerAllOrders')->name('shop.customer.orders');
        // Return Customer ->Value Records -> Orders Status
        Route::get('/dashboard/change-password', 'Shop\ChangePasswordController@index');
        Route::post('/dashboard/change-password', 'Shop\ChangePasswordController@store')->name('shop.change.password');
        Route::get('/dashboard/reset-password', 'Shop\ForgotPasswordController@sendEmailReset')->name('shop.forgot.password');

       
        Route::get('/dashboard/orders/index', 'Shop\OrderController@customerAllOrders');

        Route::get('/product/{productNameSlug}', 'Shop\ShopController@product')->name('shop.product');

        Route::group(['prefix' => 'cart'], function () {
            Route::get('/', 'Shop\CartController@index');

            // POST route for adding item to cart.
            Route::post('/add-item', 'Shop\CartController@store')->name('shop.cart.add-item');

            // DELETE route for deleting cart item.
            Route::put('/delete-item/{id}', 'Shop\CartController@destroy')->name('shop.cart.delete-item');

            // Checkout cart items.
            Route::post('/checkout', 'Purchase\PurchaseController@checkoutItems');

            Route::get('/checkout/offline', 'Purchase\PurchaseController@offlinePayment');

            Route::post('/checkout/offline', 'Purchase\PurchaseController@offlinePaymentStore');
        });

        Route::group(['prefix' => 'buy'], function () {
            Route::post('buy-now', 'Purchase\PurchaseController@buyNow')
                ->name('shop.buy.buy-now');
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

    // Payment
    Route::group(['prefix' => 'payment'], function () {
        // View for user to select payment option and provide their payment information.
        Route::get('/cashier', 'Purchase\PurchaseController@paymentOption');

        // Handle POST request after user selected payment option and provided their payment information.
        Route::post('/', 'Purchase\PaymentGatewayController@paymentGatewayRequest');

        Route::post('/gateway-response', 'Purchase\PaymentGatewayController@paymentGatewayResponse');
    });
    // End Payment

    // Web
    Route::group(['prefix' => 'web'], function () {
        Route::group(['prefix' => 'cart'], function () {
            // Get user's cart items.
            Route::get('/', 'WEB\Shop\CartController@index')
                ->name('web.shop.cart');

            // Remove user's cart item.
            Route::put('/remove/{id}', 'WEB\Shop\CartController@remove');

            Route::post('/update-quantity/{id}', 'WEB\Shop\CartController@updateQuantity')
                ->name('web.shop.cart.update-quantity');

            //Remove user's cart quantity.
            Route::put('/remove-cart/{id}', 'WEB\Shop\CartController@removeCartQuantity');
        });

        Route::group(['prefix' => 'shop'], function () {
            // Get category.
            Route::get('/category/{categorySlug}', 'WEB\Shop\ShopController@category')
                ->name('web.shop.category');

            // Category filter.
            Route::post('/category/{categorySlug}', 'WEB\Shop\ShopController@categoryFilter')
                ->name('web.shop.category.filter');

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

// Test Routes
Route::get('/tests/send-po-email-job', function () {
    $order = App\Models\Purchases\Order::where('order_number', 'PO202004 000001')->firstOrFail();
    $emailAddress = App\Models\Users\User::find(1)->email;

    App\Jobs\Emails\SendPurchaseOrderEmail::dispatch($emailAddress, $order);

    // $email = new App\Mail\Purchase\PurchaseOrderEmail($order);
    // Mail::to($emailAddress)->send($email);
});

Route::get('/tests/send-invoice-email-job', function () {
    $purchase = App\Models\Purchases\Purchase::find(1);

    $emailAddress = App\Models\Users\User::find(1)->email;

    App\Jobs\Emails\SendInvoiceAndReceiptEmail::dispatch($emailAddress, $purchase);
});

Route::get('/tests/preview-send-po-email', function () {
    $order = App\Models\Purchases\Order::where('order_number', 'PO202004 000001')->firstOrFail();

    return new App\Mail\Purchase\PurchaseOrderEmail($order);
});

Route::get('/test/preview-send-invoice-receipt-email', function () {
    $purchase = App\Models\Purchases\Purchase::find(1);

    return new App\Mail\Purchase\InvoiceAndReceiptEmail($purchase);
});

Route::get('/tests/create-purchase-order-pdf', function () {
    $order = App\Models\Purchases\Order::first();

    $pdf = PDF::loadView('documents.order.purchase-order', compact('order'));
    
    return $pdf->stream();
});

Route::get('/tests/create-invoice-pdf', function () {
    $purchase = App\Models\Purchases\Purchase::find(1);

    $pdf = PDF::loadView('documents.purchase.invoice', compact('purchase'));
    
    return $pdf->stream();
});

Route::get('/tests/create-invoice-pdf-view', function () {
    $purchase = App\Models\Purchases\Purchase::find(1);

    return view('documents.purchase.invoice')
        ->with('purchase', $purchase);
});

Route::get('/tests/create-invoice-pdf-old', function () {
    $purchase = App\Models\Purchases\Purchase::find(1);

    $pdf = PDF::loadView('documents.invoice', compact('purchase'));

    return $pdf->stream();
});

Route::get('/tests/create-receipt-pdf', function () {
});

Route::get('/tests/order-received/{purchaseNum}', function () {
    $order = App\Models\Purchases\Order::where('order_number', 'PO202004 000001')->first();

    return view('shop.payment.deliveries.qr-scanned')
        ->with('order', $order);
});

Route::post('/tests/order-received', function (Request $request) {
    return $request;
});
