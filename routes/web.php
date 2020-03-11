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

Route::get('/generate-po', function () {

    // Get user.
    $user = App\Models\Users\User::find(1);
    // Get the items in the cart of user.
    $cartItems = $user->cartItems;

    // Initialize an empty array of PO Numbers
    $po_numbers = array(); // ['PO#1', 'PO#2', 'PO#3'];

    // Create a new purchase record.
    $purchase = new App\Models\Purchases\Purchase;
    // Assign user to the purchase record.
    $purchase->user_id = $user->user_id;
    // Generate a unique number used to identify the purchase.
    $purchase->purchase_number = 'INV-' . Carbon\Carbon::now()->format('m') . '-' . mt_rand(11111, 99999);
    // Assign a status to the purchase. Unpaid, paid.
    $purchase->purchase_status = 1;
    // Assign the current date to the purchase in the form of DD/MM/YYYY.
    $purchase->purchase_date = Carbon\Carbon::now()->format('d/m/Y');
    $purchase->save();

    $price = 0;
    // Create order record.
    // Foreach item in the cart..
    foreach ($cartItems as $cartItem) {
        // Create a new PO Number for each different panel belonging to an item.
        if (!array_key_exists($cartItem->product->panel->user_id, $po_numbers)) {
            $po_numbers[$cartItem->product->panel->user_id] = 'PO#' . mt_rand(11111, 99999);
        }
        // if (array_key_exists($cartItem->product->panel->user_id, $po_numbers)) {
        //     $order = App\Models\Purchases\Order::find($po_numbers[$cartItem->product->panel->user_id]);
        //     $order->order_number = $po_numbers[$cartItem->product->panel->user_id];
        //     $order->purchase_id = $purchase->id;
        // } else {
        //     $po_numbers[$cartItem->product->panel->user_id] = 'PO#' . mt_rand(11111, 99999);
        //     $order = new App\Models\Purchases\Order;
        //     $order->order_number = $po_numbers[$cartItem->product->panel->user_id];
        //     $order->purchase_id = $purchase->id;
        //     $order->panel_id = $cartItem->product->panel->user_id
        // }
    }

    // Initialize an empty variable to store panel's id.
    $panelId = null;
    // Foreach PO Number..
    foreach ($po_numbers as $key => $po_number) {
        // Create a new order record.
        $order = new App\Models\Purchases\Order;
        // Assign PO Number to the order.
        $order->order_number = $po_number;
        // Assign purchase id to the order
        $order->purchase_id = $purchase->id;
        // Assign the panel id to the order record
        $order->panel_id = $key;
        // Assign a status for the order. Placed, Shipped, Delivered.
        $order->order_status = 'Placed';
        $order->save();

        $panelId = $key;

        // Foreach item in the cart..
        foreach ($cartItems as $cartItem) {
            // If the cart item product's panel id matches with the current panel id..
            if ($cartItem->product->panel->user_id == $panelId) {
                // Create a new item record.
                $item = new App\Models\Purchases\Item;
                // Assign an order number to the item
                $item->order_number = $order->order_number;
                // Assign a product id to the item
                $item->product_id = $cartItem->product->id;
                // Get the cart product's information. Color, dimension or length..
                // Store it in an array, easier to access later and avoid creating another column just for an attribute of a product
                $item->product_information = $cartItem->product_information;
                // $item->product_information = array(
                //     "product_color_id" => "1",
                //     "product_dimension_id" => "null",
                //     "product_length_id" => "null"
                // );
                // Assign item quantity.
                $item->quantity = $cartItem->quantity;
                // Assign subtotal price.
                $item->subtotal_price = $cartItem->total_price;
                // Assign status of the item. Placed, shipped, delivered.
                $item->status_id = 1;
                $item->save();
            }
        }
    }
    // Create invoice record.
});

// Authentication routes. Verification is set to true.
Auth::routes(['verify' => true]);

/**
 * Any routes that needs a user to be logged in with a verified account,
 * place under this group.
 */
Route::group(['middleware' => ['auth', 'verified']], function () {

    // Management
    Route::group(['prefix' => 'management', 'middleware' => ['role:dealer|panel|administrator']], function () {

        // Dashboard
        Route::get('/', 'Management\ManagementController@index')->name('management.home');

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

    // Shop
    Route::group(['prefix' => 'shop'], function () {
        Route::group(['prefix' => 'cart'], function () {
            Route::get('/', 'Shop\CartController@index');

            // Checkout cart items.
            Route::post('/checkout', 'Purchase\PurchaseController@checkoutItems');
        });
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
    });
    // End Web
});
