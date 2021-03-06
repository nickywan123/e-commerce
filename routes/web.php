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
// Route::get('/shop/invoice', 'Purchase\PurchaseController@invoiceCustomer');

// Return invoice in customer dashboard (Orders) 
Route::get('/orders/invoice/{purchase_num}', 'Shop\ValueRecordsController@invoice');

//Return receipt in customer dashboard(Receipt)

Route::get('/orders/receipt/{purchase_num}', 'Shop\ValueRecordsController@receipt');

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
Route::put('/order-received/{orderNumber}', 'Purchase\PurchaseController@qrSubmit')
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
        Route::get('/panel/home', 'Management\ManagementController@index')->name('management.panel.home');
        Route::put('/panel/update-order/{order_num}', 'Management\ManagementController@updateOrder')->name('update.order.panel');
        Route::put('/panel/update-qr-submitted/{order_num}', 'Purchase\PurchaseController@qrSubmit')->name('update.order.panel.received.date');
        Route::get('/panel/company-profile', 'Management\ManagementController@companyProfile')->name('management.company.profile');
        Route::get('/panel/company-profile-edit', 'Management\ManagementController@editProfile')->name('management.company.profile.edit');
        Route::patch('/panel/company-profile-update/{id}', 'Management\ManagementController@updateProfile')->name('management.company.profile.update');

        Route::get('/panel/change-password', 'Management\ChangePasswordController@index');
        Route::post('/panel/change-password', 'Management\ChangePasswordController@store')->name('change.password');

        Route::get('/panel/orders/purchase-order-pdf/{order_num}', 'Management\ManagementController@viewPurchaseOrder');
        Route::get('/panel/value-tracking/index', 'Management\ManagementController@valueTracking')->name('management.panel.value-tracking');
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
        Route::get('/dealer/home', 'Management\ManagementController@homeDealer')->name('management.dealer.home');
        Route::get('/dealer/index', 'Management\ManagementController@indexDealer')->name('management.dealer.statement.home');
        Route::get('/dealer/profile', 'Management\ManagementController@dealerProfile')->name('shop.dashboard.dealer.profile');
        Route::get('/dealer/profile/edit', 'Management\ManagementController@editdealerProfile')->name('shop.dashboard.dealer.profile.edit');
        Route::patch('/dealer/profile-update/{id}', 'Management\ManagementController@updateDealerProfile')->name('shop.dashboard.dealer.profile.update');
        Route::get('/password', 'Management\ManagementController@modifyPassword');
        Route::get('/dealer/statements/{month}/{month_num}/{year}', 'Management\ManagementController@statements')->name('dealer.statement');
        Route::get('/dealer/sales-summary', 'Management\ManagementController@salesSummary')->name('dealer.sales.summary');

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
    });
    // End Management

    // Administrator
    Route::group(['prefix' => 'administrator', 'middleware' => ['role:administrator']], function () {

        Route::get('/', 'Administrator\AdministratorController@index');

        // User management.
        Route::group(['prefix' => 'users'], function () {
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

        // Products
        Route::group(['prefix' => 'products'], function () {
            // V1
            Route::group(['prefix' => 'v1'], function () {
                // Index
                Route::get('/', 'Administrator\v1\Product\ProductController@index')
                    ->name('administrator.v1.products');

                // Edit
                Route::get('/edit/{id}', 'Administrator\v1\Product\ProductController@edit')
                    ->name('administrator.v1.products.edit');

                // Update
                Route::put('/edit/{id}/update', 'Administrator\v1\Product\ProductController@update')
                    ->name('administrator.v1.products.update');

                // Image Get (Dropzone)
                Route::get('/image-get/{id}', 'Administrator\v1\Product\ProductController@getImage')
                    ->name('administrator.v1.products.get-image');

                // Image upload (Dropzone).
                Route::post('/image-upload/{id}', 'Administrator\v1\Product\ProductController@storeImage')
                    ->name('administrator.v1.products.store-image');

                // Image delete (Dropzone).
                Route::post('/image-delete/{id}', 'Administrator\v1\Product\ProductController@deleteImage')
                    ->name('administrator.v1.products.delete-image');

                //  Product by panels.
                Route::group(['prefix' => 'panels'], function () {
                    // Index
                    Route::get('/', 'Administrator\v1\Product\ProductByPanelController@index')
                        ->name('administrator.v1.products.panels');

                    // Create
                    Route::get('/create', 'Administrator\v1\Product\ProductByPanelController@create')
                        ->name('administrator.v1.products.panels.create');

                    // Store
                    Route::post('/store', 'Administrator\v1\Product\ProductByPanelController@store')
                        ->name('administrator.v1.products.panels.store');

                    // Edit
                    Route::get('/edit/{id}', 'Administrator\v1\Product\ProductByPanelController@edit')
                        ->name('administrator.v1.products.panels.edit');

                    // Update
                    Route::put('/edit/{id}/update', 'Administrator\v1\Product\ProductByPanelController@update')
                        ->name('administrator.v1.products.panels.update');
                });
            });

            // Product index.
            Route::get('/', 'Administrator\Product\ProductController@index')
                ->name('administrator.products');
            // Return JSON response of all products
            Route::get('/resource', 'WEB\Administrator\ProductJSONController@getProducts')
                ->name('administrator.products.json');

            // Create product.
            Route::get('/create', 'Administrator\Product\ProductController@create')
                ->name('administrator.products.create');

            // Image upload.
            Route::post('/image-upload/{productId}', 'Administrator\Product\ProductController@storeImage')
                ->name('administrator.products.store-image');

            // Image delete.
            Route::post('/image-delete/{productId}', 'Administrator\Product\ProductController@deleteImage')
                ->name('administrator.products.delete-image');

            // Store product.
            Route::post('/store', 'Administrator\Product\ProductController@store')
                ->name('administrator.products.store');

            // Edit product.
            Route::get('/edit/{productId}', 'Administrator\Product\ProductController@edit')
                ->name('administrator.products.edit');

            // Update product.
            Route::put('/update/{productId}', 'Administrator\Product\ProductController@update')
                ->name('administrator.products.update');

            // Publish Product
            Route::get('/product-publish/{productId}', 'Administrator\Product\ProductController@publishProduct');

            // Unpublish Product
            Route::get('/product-unpublish/{productId}', 'Administrator\Product\ProductController@unpublishProduct');

            // Panels
            Route::group(['prefix' => 'panels'], function () {
                // Index
                Route::get('/', 'Administrator\Product\PanelProductController@index')
                    ->name('administrator.products.panels');

                // Create
                Route::post('/create', 'Administrator\Product\PanelProductController@create')
                    ->name('administrator.products.panels.create');

                // Store
                Route::post('/store', 'Administrator\Product\PanelProductController@store')
                    ->name('administrator.products.panels.store');

                // Edit
                Route::get('/edit/{productId}', 'Administrator\Product\PanelProductController@edit')
                    ->name('administrator.products.panels.edit');

                // Update
                Route::put('/update/{productId}', 'Administrator\Product\PanelProductController@update')
                    ->name('administrator.products.panels.update');

                // Delete
                Route::delete('/delete/{productId}', 'Administrator\Product\PanelProductController@destroy')
                    ->name('administrator.products.panels.delete');
            });
        });
        // End Administrator

        // Category
        Route::group(['prefix' => 'categories'], function () {
            // Index
            Route::get('/', 'Administrator\Category\CategoryController@index')
                ->name('administrator.categories');

            // Create
            Route::get('/create', 'Administrator\Category\CategoryController@create')
                ->name('administrator.categories.create');

            // Store
            Route::post('/store', 'Administrator\Category\CategoryController@store')
                ->name('administrator.categories.store');

            // Edit
            Route::get('/edit/{id}', 'Administrator\Category\CategoryController@edit')
                ->name('administrator.categories.edit');

            // Update
            Route::put('/update/{id}', 'Administrator\Category\CategoryController@update')
                ->name('administrator.categories.update');

            // Delete
            Route::delete('/delete/{id}', 'Administrator\Category\CategoryController@destroy')
                ->name('administrator.categories.delete');
        });
    });

    // Delhub Digital
    Route::get('/delhub-digital', 'Shop\ShopController@delhubdigital')->name('delhub.digital');

    // Shop
    Route::group(['prefix' => 'shop'], function () {
        // Home/Index page for shop.
        Route::get('/', 'Shop\ShopController@index')->name('shop.index');

        // Add item to perfect list
        Route::post('/perfect-list/{product_id}', 'Shop\WishListController@store')->name('shop.add-perfect-list');

        //Get total quantity of perfect list
        Route::get('/get-quantity-perfect-list/{id}', 'Shop\WishListController@getQuantity')->name('shop.perfect-list.quantity');

        //Remove perfect list 
        Route::delete('/remove/{product_id}', 'Shop\WishListController@destroy')->name('shop.perfect-list.destroy');

        // About Us Page
        Route::get('/about-us', 'Shop\ShopController@aboutUs')->name('shop.about.us');

        //Privacy Policy Page
        Route::get('/privacy-policy', 'Shop\ShopController@privacyPolicy')->name('shop.privacy.policy');

        //Workforce Page
        Route::get('/workforce', 'Shop\ShopController@workforce')->name('shop.workforce');

        //Bujishu Service Page
        Route::get('/bujishu-service', 'Shop\ShopController@bujishuService')->name('shop.bujishu.service');

        //FAQ Page
        Route::get('/faq', 'Shop\ShopController@faq')->name('shop.faq');

        //Our Vision, Culture and Value
        Route::get('vision-culture-value', 'Shop\ShopController@visionCultureValue')->name('shop.vision');

        //Work In Progress Page
        Route::get('/work-in-progress', 'Shop\ShopController@workInProgress')->name('shop.wip');

        Route::group(['prefix' => 'category'], function () {
            Route::get(
                '/renovations',
                'Shop\ShopController@renovationCategory'
            );

            Route::get(
                '/{topLevelCategorySlug}',
                'Shop\ShopController@topLevelCategory'
            )->name('shop.category.first');

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
        Route::get('/dashboard/profile/edit', 'Shop\ProfileController@edit')->name('shop.dashboard.customer.profile.edit');

        Route::patch('dashboard/profile/update/{id}', 'Shop\ProfileController@updateProfile')->name('profile.update');

        Route::get('/dashboard/home', 'Shop\ValueRecordsController@homePageCustomer')->name('shop.dashboard.customer.home');

        // Return Customer ->All Orders
        Route::get('/dashboard/orders/index', 'Shop\ValueRecordsController@customerAllOrders')->name('shop.customer.orders');
        // Return Customer -> Open Orders
        Route::get('/dashboard/orders/open-orders', 'Shop\ValueRecordsController@openOrders')->name('shop.customer.open-orders');

        // Return Customer -> Orders Status
        Route::get('/dashboard/orders/order-status', 'Shop\ValueRecordsController@orderStatus')->name('shop.customer.order-status');

        // Return My Perfect List
        Route::get('/dashboard/wishlist/index', 'Shop\ValueRecordsController@wishlist')->name('shop.wishlist.home');


        Route::get('/dashboard/change-password', 'Shop\ChangePasswordController@index');
        Route::post('/dashboard/change-password', 'Shop\ChangePasswordController@store')->name('shop.change.password');
        Route::get('/dashboard/reset-password', 'Shop\ForgotPasswordController@sendEmailReset')->name('shop.forgot.password');

        // TODO: Temporary. For interior-design payment.
        Route::get('/product/temp/renovation', 'Shop\ShopController@interiorDesign');

        // TODO: Temporary. For interior-design post payment.
        Route::post('/product/interior-design/store', 'Shop\ShopController@interiorDesignStore');

        Route::get('/product/{productNameSlug}', 'Shop\ShopController@product')->name('shop.product');

        Route::put('/product/edit-address', 'Shop\ShopController@productChangeAddress')
            ->name('shop.product.edit-address');

        Route::group(['prefix' => 'cart'], function () {
            Route::get('/', 'Shop\CartController@index');

            // POST route for adding item to cart.
            Route::post('/add-item', 'Shop\CartController@store')->name('shop.cart.add-item');

            Route::post('/buy-now', 'Shop\CartController@buyNowStore')->name('shop.cart.buy-now');

            // DELETE route for deleting cart item.
            Route::put('/delete-item/{id}', 'Shop\CartController@destroy')->name('shop.cart.delete-item');

            // Checkout cart items.
            Route::post('/checkout', 'Purchase\PurchaseController@checkoutItems');

            Route::get('/checkout/offline', 'Purchase\PurchaseController@offlinePayment');

            Route::post('/checkout/offline', 'Purchase\PurchaseController@offlinePaymentStore');
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

        Route::put(
            '/update-customer-details/{purchaseNumber}',
            'Purchase\PurchaseController@updateCustomerPaymentDetail'
        )->name('payment.update-details');

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

            // Get total items in user's cart.
            Route::get('/get-quantity/{id}', 'WEB\Shop\CartController@getTotalCartQuantity')
                ->name('web.shop.cart.quantity');

            // Remove user's cart item.
            Route::put('/remove/{id}', 'WEB\Shop\CartController@remove');

            Route::post('/update-quantity/{id}', 'WEB\Shop\CartController@updateQuantity')
                ->name('web.shop.cart.update-quantity');

            // Remove user's cart quantity.
            Route::put('/remove-cart/{id}', 'WEB\Shop\CartController@removeCartQuantity');

            // Toggle checked state.
            Route::post('/select-item/{id}', 'WEB\Shop\CartController@toggleSelectItem')
                ->name('web.shop.cart.toggle-select');
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

// Development Routes
use App\Models\Globals\Products\Product as GlobalProducts;
use App\Http\Resources\Product\Product as ProductResource;
use App\Http\Resources\Product\ProductCollection as ProductCollectionResource;
use App\Models\Users\Customers\Cart;
use App\Models\Users\User;

Route::group(['prefix' => 'development'], function () {

    Route::get('/administrator/products', function () {
        $products = new ProductCollectionResource(GlobalProducts::all());
        return view('administrator.products.global.v1.index')
            ->with('products', $products);
    });

    Route::get('/administrator/products/create', function () {
        return view('administrator.products.v1.global.create');
    });

    Route::get('/administrator/products/edit', function () {
        $product = GlobalProducts::find(1);
        return view('administrator.products.v1.global.edit')
            ->with('product', $product);
    });

    Route::get('/administrator/products/panel/edit', function () {
        return view('administrator.products.panel.v1.edit');
    });

    Route::get('/cart/test-1', function () {
        $user = User::find(Auth::user()->id);
        $cart = Cart::where('user_id', $user->id)->whereHas('product.panel', function ($q) {
            $q->where('panel_account_id', '1918000105');
        })->get();

        return $cart;
    });

    Route::get('/register-dealer', function () {
        return view('auth.register.v1.dealer');
    });
});
