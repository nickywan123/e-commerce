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
Route::get('qr-code-g', function () {
    QrCode::size(500)
              ->format('png')
              ->generate('ItSolutionStuff.com', public_path('images/qrcode.png'));
      
    return view('qr.qrCode');
      
  });

  //Route to finalize order status to deliver state once customer scan the QR
//   Route::get('/QR-Completed','SomeControllerMethod');

Route::get('/', 'Guest\GuestController@index');

Route::get('/login', 'Auth\LoginController@showLoginForm');

// Return invoice 
Route::get('/shop/invoice', 'Purchase\PurchaseController@invoiceCustomer');


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
Route::get('/shop/purchase-order', 'Panel\DashboardController@viewPurchaseOrder');
  //Return Work In progress page
  Route::view('/wip', 'errors.wip');

  Route::get('/shop/profile', 'Shop\ProfileController@index');
// // Shop Routes
// Route::prefix('shop')->group(function () {
//     // Home/Index page for shop.
//     Route::get('/', 'Shop\ShopController@index')->name('shop.index');


//     // Author - Wan Shahruddin

//     Route::group(['prefix' => 'category'], function () {
//         Route::get('/{topLevelCategorySlug}', 'Shop\ShopController@topLevelCategory');
//         Route::get('/{topLevelCategorySlug}/{secondLevelCategorySlug}', 'Shop\ShopController@secondLevelCategory');
//         Route::get('/{topLevelCategorySlug}/{secondLevelCategorySlug}/{thirdLevelCategory}', 'Shop\ShopController@thirdLevelCategory');
//     });

//     // // Category page for shop. Displays products related to selected category.
//     // // Accepts slugged category name or slugged subcategory name.
//     // Route::get('/category/{categorySlug}', 'Shop\ShopController@category')->name('shop.category');

//     // // Subcategory page for shop. Displays products related to the selected product type.
//     // Route::get(
//     //     '/category/{categorySlug}/{subcategorySlug}',
//     //     'Shop\ShopController@subcategory'
//     // )->name('shop.category.subcategory');

//     // // Product type page for shop. Displays products related to the selected product type.
//     // Route::get(
//     //     '/category/{categorySlug}/{subcategorySlug}/{productTypeSlug}',
//     //     'Shop\ShopController@productType'
//     // )->name('shop.category.subcategory.type');

//     // // Product page for shop. Display detailed info of the product.
//     Route::get('/product/{productNameSlug}', 'Shop\ShopController@product')->name('shop.product');

//     // // Shopping cart page.
//     // Route::get('/shopping-cart', 'Shop\ShopController@shoppingCart')->name('shop.cart');

//     // Cart prefix.
//     Route::prefix('cart')->group(function () {
//         // Shopping cart page.
//         Route::get('/', 'Shop\CartController@index')->name('shop.cart');

//         // POST route for adding item to cart.
//         Route::post('/add-item', 'Shop\CartController@store')->name('shop.cart.add-item');

//         // DELETE route for deleting cart item.
//         Route::put('/delete-item/{id}', 'Shop\CartController@destroy')->name('shop.cart.delete-item');
//     });

//     // Order prefix.
//     Route::prefix('order')->group(function () {
//         // Order history page.
//         Route::get('/', 'Shop\OrderController@index')->name('shop.order');

//         // POST route for checking out cart item and placing order.
//         Route::post('/checkout', 'Shop\OrderController@store')->name('shop.order.checkout');
//     });
// });

// Route::get('/generate-po', function () {

//     // Get user.
//     $user = App\Models\Users\User::find(1);
//     // Get the items in the cart of user.
//     $cartItems = $user->cartItems;

//     // Initialize an empty array of PO Numbers
//     $po_numbers = array(); // ['PO#1', 'PO#2', 'PO#3'];

//     // Create a new purchase record.
//     $purchase = new App\Models\Purchases\Purchase;
//     // Assign user to the purchase record.
//     $purchase->user_id = $user->user_id;
//     // Generate a unique number used to identify the purchase.
//     $purchase->purchase_number = 'INV-' . Carbon\Carbon::now()->format('m') . '-' . mt_rand(11111, 99999);
//     // Assign a status to the purchase. Unpaid, paid.
//     $purchase->purchase_status = 1;
//     // Assign the current date to the purchase in the form of DD/MM/YYYY.
//     $purchase->purchase_date = Carbon\Carbon::now()->format('d/m/Y');
//     $purchase->save();

//     $price = 0;
//     // Create order record.
//     // Foreach item in the cart..
//     foreach ($cartItems as $cartItem) {
//         // Create a new PO Number for each different panel belonging to an item.
//         if (!array_key_exists($cartItem->product->panel->user_id, $po_numbers)) {
//             $po_numbers[$cartItem->product->panel->user_id] = 'PO#' . mt_rand(11111, 99999);
//         }
//         // if (array_key_exists($cartItem->product->panel->user_id, $po_numbers)) {
//         //     $order = App\Models\Purchases\Order::find($po_numbers[$cartItem->product->panel->user_id]);
//         //     $order->order_number = $po_numbers[$cartItem->product->panel->user_id];
//         //     $order->purchase_id = $purchase->id;
//         // } else {
//         //     $po_numbers[$cartItem->product->panel->user_id] = 'PO#' . mt_rand(11111, 99999);
//         //     $order = new App\Models\Purchases\Order;
//         //     $order->order_number = $po_numbers[$cartItem->product->panel->user_id];
//         //     $order->purchase_id = $purchase->id;
//         //     $order->panel_id = $cartItem->product->panel->user_id
//         // }
//     }

//     // Initialize an empty variable to store panel's id.
//     $panelId = null;
//     // Foreach PO Number..
//     foreach ($po_numbers as $key => $po_number) {
//         // Create a new order record.
//         $order = new App\Models\Purchases\Order;
//         // Assign PO Number to the order.
//         $order->order_number = $po_number;
//         // Assign purchase id to the order
//         $order->purchase_id = $purchase->id;
//         // Assign the panel id to the order record
//         $order->panel_id = $key;
//         // Assign a status for the order. Placed, Shipped, Delivered.
//         $order->order_status = 'Placed';
//         $order->save();

    return view("backups.dashboard_receipts.invoice");
});
//         $panelId = $key;

//         // Foreach item in the cart..
//         foreach ($cartItems as $cartItem) {
//             // If the cart item product's panel id matches with the current panel id..
//             if ($cartItem->product->panel->user_id == $panelId) {
//                 // Create a new item record.
//                 $item = new App\Models\Purchases\Item;
//                 // Assign an order number to the item
//                 $item->order_number = $order->order_number;
//                 // Assign a product id to the item
//                 $item->product_id = $cartItem->product->id;
//                 // Get the cart product's information. Color, dimension or length..
//                 // Store it in an array, easier to access later and avoid creating another column just for an attribute of a product
//                 $item->product_information = $cartItem->product_information;
//                 // $item->product_information = array(
//                 //     "product_color_id" => "1",
//                 //     "product_dimension_id" => "null",
//                 //     "product_length_id" => "null"
//                 // );
//                 // Assign item quantity.
//                 $item->quantity = $cartItem->quantity;
//                 // Assign subtotal price.
//                 $item->subtotal_price = $cartItem->total_price;
//                 // Assign status of the item. Placed, shipped, delivered.
//                 $item->status_id = 1;
//                 $item->save();
//             }
//         }
//     }
//     // Create invoice record.
// });

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
