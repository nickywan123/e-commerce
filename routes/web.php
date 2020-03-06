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

Route::get('/generate-po', function () {
    $user = App\Models\Users\User::find(1);
    $cartItems = $user->cartItems;


    $po_numbers = array(); // ['PO#1', 'PO#2', 'PO#3'];

    $purchase = new App\Models\Purchases\Purchase;
    $purchase->user_id = $user->user_id;
    $purchase->purchase_number = 'INV-' . Carbon\Carbon::now()->format('m') . '-' . mt_rand(11111, 99999);
    $purchase->purchase_status = 1;
    $purchase->purchase_date = Carbon\Carbon::now()->format('d/m/Y');
    $purchase->save();

    $price = 0;
    // Create order record.
    foreach ($cartItems as $cartItem) {
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

    $panelId = null;
    foreach ($po_numbers as $key => $po_number) {
        $order = new App\Models\Purchases\Order;
        $order->order_number = $po_number;
        $order->purchase_id = $purchase->id;
        $order->panel_id = $key;
        $order->order_status = 'Placed';
        $order->save();

        $panelId = $key;

        foreach ($cartItems as $cartItem) {
            if ($cartItem->product->panel->user_id == $panelId) {
                $item = new App\Models\Purchases\Item;
                $item->order_number = $order->order_number;
                $item->product_id = $cartItem->product->id;
                $item->product_information = 'Hello';
                // $item->product_information = array(
                //     "product_color_id" => "1",
                //     "product_dimension_id" => "null",
                //     "product_length_id" => "null"
                // );
                $item->quantity = $cartItem->quantity;
                $item->subtotal_price = $cartItem->total_price;
                $item->status_id = 1;
                $item->save();
            }
        }
    }
    var_dump($panelId);
    // Create invoice record.
});

Auth::routes(['verify' => true]);
