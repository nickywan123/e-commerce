<?php

namespace App\Http\Controllers\Purchase;

use PDF;
use Auth;
use Carbon\Carbon;
use App\Models\Users\User;
use Illuminate\Http\Request;
use App\Models\Purchases\Item;
use App\Models\Purchases\Order;
use App\Mail\Orders\CheckoutOrder;
use App\Models\Purchases\Purchase;
use App\Models\Categories\Category;
use App\Http\Controllers\Controller;
use App\Models\Users\Customers\Cart;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use App\Mail\Orders\InvoiceEmailCustomer;
use App\Models\Globals\State;
use App\Models\Purchases\Rating;
use App\Models\Users\Panels\PanelInfo;
use App\Models\Products\Product as PanelProduct;
use File;

class PurchaseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            // Check if user is authenticated or not.
            if (Auth::check()) {
                // If authenticated, then get their cart.
                $this->cart = Auth::user()->carts->where('status', 2001);
            }
            // Get all categories, with subcategories and its images.
            $categories = Category::topLevelCategory();

            // Share the above variable with all views in this controller.
            View::share('categories', $categories);
            // TODO: Check why is it causing an error on the server.
            //View::share('cart', $this->cart);

            // Return the request.
            return $next($request);
        });
    }

    public function buyNow(Request $request)
    {
        $user = User::find(Auth::user()->id);

        $product = PanelProduct::find($request->input('product_id'));

        $po_numbers = array();

        $invoiceSequence = Purchase::all()->count() + 1;

        $purchase = new Purchase;

        $purchase->user_id = $user->id;

        $purchase->purchase_number =
            '0000000BSN' . Carbon::now()->format('Y') . str_pad($invoiceSequence, 6, "0", STR_PAD_LEFT);

        $purchase->purchase_status = 3000;

        $purchase->purchase_date = Carbon::now()->format('d/m/Y');

        $purchase->purchase_amount = $product->price;

        $purchase->save();

        $poSequence = Order::all()->count() + 1;

        $order = new Order;
        // Assign PO Number to the order.
        $order->order_number =
            'PO' . Carbon::now()->format('Y') . Carbon::now()->format('m') . '-' . str_pad($poSequence, 6, "0", STR_PAD_LEFT);
        // Assign purchase id to the order
        $order->purchase_id = $purchase->id;
        // Assign the panel id to the order record
        $order->panel_id = $product->panel_account_id;
        // Assign a status for the order. Placed, Shipped, Delivered.
        $order->order_status = 1000;
        // Assign empty value for order amount first.
        $order->order_amount = ($product->price * $request->input('productQuantity')) + $product->delivery_fee + $product->installation_fee;

        $order->save();

        // Variables initiliazation.
        $color = null;
        $size = null;
        $temperature = null;

        // If the post request has product color id value in it..
        if ($request->input('product_attribute_color') != null) {
            // Get selected product color.
            $color = $product->colorAttributes->where('id', $request->input('product_attribute_color'))->first();

            // Set color id for checking purposes.
            $colorId = $color->id;
        }

        // If the post request has product dimension id value in it..
        if ($request->input('product_attribute_size') != null) {
            // Get selected product dimension.
            $size = $product->sizeAttributes->where('id', $request->input('product_attribute_size'))->first();

            // Set dimension id for checking purposes.
            $sizeId = $size->id;
        }

        // If the post request has product length id value in it..
        if ($request->input('product_attribute_temperature') != null) {
            // Get selected product length.
            $temperature = $product->lightTemperatureAttributes
                ->where('id', $request->input('product_attribute_temperature'))->first();

            // Set length id for checking purposes.
            $temperatureId = $temperature->id;
        }

        // Check if the post request has product color id in it..
        if ($color != null) {
            // If yes, assign the color id and name
            $productInformation['product_color_id'] = $color->id;
            $productInformation['product_color_name'] = $color->attribute_name;
        }
        // Check if the post request has product dimension id in it..
        if ($size != null) {
            // If yes, assign the dimension id and concate the width, height, depth and measurement unit.
            $productInformation['product_size_id'] = $size->id;
            $productInformation['product_size'] = $size->attribute_name;
        }
        // Check if the post request has product length id in it..
        if ($temperature != null) {
            // If yes, assign the length id and concate the length and measurement unit.
            $productInformation['product_temperature_id'] = $temperature->id;
            $productInformation['product_temperature'] = $temperature->attribute_name;
        }

        // Create a new item record.
        $item = new Item;
        // Assign an order number to the item
        $item->order_number = $order->order_number;
        // Assign a product id to the item
        $item->product_id = $product->id;
        // Get the cart product's information. Color, dimension or length..
        // Store it in an array, easier to access later and avoid creating another column just for an attribute of a product
        $item->product_information = $productInformation;
        // Assign item quantity.
        $item->quantity = $request->input('productQuantity');
        // Assign subtotal price.
        $item->subtotal_price = $product->price * $request->input('productQuantity');
        // Assign delivery fee.
        $item->delivery_fee = $product->delivery_fee;
        // Assign installation fee.
        $item->installation_fee = $product->installation_fee;
        // Assign status of the item. Placed, shipped, delivered.
        $item->status_id = 1;
        $item->save();

        return redirect('/payment/cashier?orderId=' . $purchase->purchase_number);
    }

    /**
     * Handle what happens after user clicks checkout
     */
    public function checkoutItems(Request $request)
    {
        // Get user.
        $user = User::find(Auth::user()->id);
        // Get the items in the cart of user.
        $cartItems = Cart::whereIn('id', $request->input('cartItemId'))->get();

        // Initialize an empty array of PO Numbers
        $po_numbers = array(); // ['PO#1', 'PO#2', 'PO#3'];

        $invoiceSequence = Purchase::all()->count() + 1;

        // Create a new purchase record.
        $purchase = new Purchase;
        // Assign user to the purchase record.
        $purchase->user_id = $user->id;
        // Generate a unique number used to identify the purchase.
        $purchase->purchase_number =
            '0000000BJN' . Carbon::now()->format('Y') . str_pad($invoiceSequence, 6, "0", STR_PAD_LEFT);

        // Assign a status to the purchase. Unpaid, paid.
        $purchase->purchase_status = 3000;
        // Assign the current date to the purchase in the form of DD/MM/YYYY.
        $purchase->purchase_date = Carbon::now()->format('d/m/Y');
        // Calculate total price of items in cart.
        $purchase_amount = 0;
        foreach ($cartItems as $cartItem) {
            $purchase_amount =
                $purchase_amount +
                $cartItem->subtotal_price +
                $cartItem->delivery_fee +
                $cartItem->installation_fee;
        }
        $purchase->purchase_amount = $purchase_amount;

        $purchase->receipt_number= 'BOR20 ' . str_pad($invoiceSequence, 7, "0", STR_PAD_LEFT);
        $purchase->save();

        $price = 0;
        $poSequence = Order::all()->count() + 1;
        // Create order record.
        // Foreach item in the cart..
        foreach ($cartItems as $cartItem) {
            // Create a new PO Number for each different panel belonging to an item.
            if (!array_key_exists($cartItem->product->panel_account_id, $po_numbers)) {
                $po_numbers[$cartItem->product->panel_account_id] = 'PO' . Carbon::now()->format('Y') . Carbon::now()->format('m') . '-' . str_pad($poSequence, 6, "0", STR_PAD_LEFT); // PO YYYY MM 000001

                $poSequence = $poSequence + 1;
            }
        }

        // Initialize an empty variable to store panel's id.
        $panelId = null;
        // Foreach PO Number..
        foreach ($po_numbers as $key => $po_number) {
            // Create a new order record.
            $order = new Order;
            // Assign PO Number to the order.
            $order->order_number = $po_number;
            // Assign purchase id to the order
            $order->purchase_id = $purchase->id;
            // Assign the panel id to the order record
            $order->panel_id = $key;
            // Assign a status for the order. Placed, Shipped, Delivered.
            $order->order_status = 1000;
            // Assign empty value for order amount first.
            $orderAmount = 0;
            $order->order_amount = 0;
            $order->delivery_date = "Pending";
            $order->received_date = "";
            $order->claim_status = "";

            $order->save();

            $panelId = $key;

            // Foreach item in the cart..
            foreach ($cartItems as $cartItem) {
                // If the cart item product's panel id matches with the current panel id..
                if ($cartItem->product->panel->account_id == $panelId) {
                    // Create a new item record.
                    $item = new Item;
                    // Assign an order number to the item
                    $item->order_number = $po_number;
                    // Assign a product id to the item
                    $item->product_id = $cartItem->product->id;
                    // Get the cart product's information. Color, dimension or length..
                    // Store it in an array, easier to access later and avoid creating another column just for an attribute of a product
                    $item->product_information = $cartItem->product_information;
                    // Assign item quantity.
                    $item->quantity = $cartItem->quantity;
                    // Assign subtotal price.
                    $item->subtotal_price = $cartItem->subtotal_price;
                    // Assign delivery fee.
                    $item->delivery_fee = $cartItem->delivery_fee;
                    // Assign installation fee.
                    $item->installation_fee = $cartItem->installation_fee;
                    // Assign status of the item. Placed, shipped, delivered.
                    $item->status_id = 1;
                    // After checkout, cart items should be removed from cart page
                    // TODO: Change status after payment successful.
                    // $cartItem->status = 2001;
                    // $cartItem->save();

                    $item->save();

                    $orderAmount = $orderAmount +
                        $cartItem->subtotal_price +
                        $cartItem->delivery_fee +
                        $cartItem->installation_fee;
                }
            }

            $order->order_amount = $orderAmount;
            $order->save();

            // //Send the email to panel after placing order (attach with PO)
            // Mail::to($order->panel->company_email)->send(new CheckoutOrder($order));

            // $pdf = PDF::loadView('documents.invoice', compact('purchase'))->setPaper('a4');

            // // Make a copy of the PDF invoice and store in public/storage/....
            // $content = $pdf->download()->getOriginalContent();
            // $pdfDestination = public_path('/storage/documents/invoice/' . $purchase->purchase_number . '/');
            // $pdfName = $purchase->purchase_number;
            // if (!File::isDirectory($pdfDestination)) {
            //     File::makeDirectory($pdfDestination, 0777, true);
            // }
            // File::put($pdfDestination . $pdfName . '.pdf', $content);

            // //Send email to customer after placing order( attach with invoice)
            // $message = new InvoiceEmailCustomer($purchase);
            // $message->attachData($pdf->output(), "invoice.pdf");
            // Mail::to($purchase->user->email)->send($message);
        }

        return redirect('/payment/cashier?orderId=' . $purchase->purchase_number);
    }

    /**
     * Show payment options to customer.
     */
    public function paymentOption(Request $request)
    {
        $purchase = Purchase::where('purchase_number', $request->query('orderId'))
            ->firstOrFail();
        $user = User::find(Auth::user()->id);
        $states = State::all();


        return view('shop.payment.index')
            ->with('purchase', $purchase)
            ->with('user', $user)
            ->with('states', $states);
    }

    public function updateCustomerPaymentDetail(Request $request)
    {
        $user = User::find(Auth::user()->id);

        $userInfo = $user->userInfo;

        $userInfo->full_name = $request->input('attention_to');
        $userInfo->save();

        $userMobileContact = $user->userInfo->mobileContact;

        $userMobileContact->contact_num = $request->input('attention_contact');
        $userMobileContact->save();

        $userAddress = $user->userInfo->shippingAddress;

        $userAddress->address_1 = $request->input('attention_address_1');
        $userAddress->address_2 = $request->input('attention_address_2');
        $userAddress->address_3 = $request->input('attention_address_3');
        $userAddress->postcode = $request->input('attention_postcode');
        $userAddress->city = $request->input('attention_city');
        $userAddress->state_id = $request->input('state');
        $userAddress->save();

        return redirect('/payment/cashier?orderId=' . $request->input('orderId'));
    }

    /**
     * Handle QR Code scans.
     */
    public function qrScanned(Request $request, $orderNum)
    {
        if (!$request->hasValidSignature()) {
            abort(401);
        }

        $order = Order::where('order_number', $orderNum)->first();

        return view('shop.payment.deliveries.qr-scanned')
            ->with('order', $order);
    }

    /**
     * Handle QR Code submit.
     */
    public function qrSubmit(Request $request)
    {
        $order = Order::where('order_number', $request->input('order_number'))->firstOrFail();
        $order->order_status = 1003;
        $order->save();

        $rating = new Rating();
        $rating->customer_id = $order->purchase->user->userInfo->account_id;
        $rating->order_number = $order->order_number;
        $rating->panel_id = $order->panel_id;
        $rating->rating = $request->input('stars');
        $rating->comment = $request->input('rating_comment');
        $rating->save();
        // return $rating;

        $panel = PanelInfo::where('account_id', $order->panel_id)->firstOrFail();
        // return $panel;

        $allRatings = Rating::where('panel_id', $panel->account_id)->get();

        $averageRating = 0;

        if ($allRatings->count() == 0) {
            $allRatings = 1;

            $averageRating = $averageRating / $allRatings;
        } else {
            foreach ($allRatings as $rating) {
                $averageRating = $averageRating + $rating->rating;
            }

            $averageRating = $averageRating / $allRatings->count();
        }

        $panel->panel_rating = $averageRating;
        $panel->save();

        return view('shop.payment.deliveries.qr-submitted');
    }



 

   




}
