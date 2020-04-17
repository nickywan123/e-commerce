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
use App\Models\Purchases\Rating;
use App\Models\Users\Panels\PanelInfo;
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
            View::share('cart', $this->cart);

            // Return the request.
            return $next($request);
        });
    }

    /**
     * Handle what happens after user clicks checkout
     */
    public function checkoutItems(Request $request)
    {
        // dd($request);
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
            '0000000BSN' . Carbon::now()->format('Y') . str_pad($invoiceSequence, 6, "0", STR_PAD_LEFT);

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
                    $cartItem->save();

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
            ->first();

        return view('shop.payment.index')
            ->with('purchase', $purchase);
    }

    /**
     * Handle QR Code scans.
     */
    public function qrScanned(Request $request, $orderNum)
    {
        if (!$request->hasValidSignature()) {
            abort(401);
        }

        $order = App\Models\Purchases\Order::where('order_number', $orderNum)->first();

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



    // IF NOT USING DELETE THE ITEM BELOW PLEASE!


    /** Return invoice for the particular order in PDF format**/

    public function invoice($purchase_num)
    {
        // Get user.
        $user = User::find(Auth::user()->id);
        $purchase = $user->purchases->where('purchase_number', $purchase_num)->first();
        $pdf = PDF::loadView('documents.invoice', compact('purchase'))->setPaper('A4');
        return $pdf->stream('invoice.pdf');
    }


    /**
     * Invoice response after customer purchase item
     */
    public function invoiceCustomer()
    {

        // $user = User::find(Auth::user()->id);
        // $purchases = $user->purchases;
        // return $purchases;
        // return view('backups.dashboard_receipts.invoice')->with('purchases', $purchases);


        $pdf = PDF::loadView('documents.invoice')->setPaper('A4');
        return $pdf->stream('invoice.pdf');

        // return view('backups.dashboard_receipts.invoice');
        // $pdf = PDF::loadView('backups.dashboard_receipts.invoice');
        // ob_end_clean();
        // return $pdf->download('invoice.pdf');
    }

    /**
     * Return invoice for Dealer
     */
    public function viewInvoice()
    {
        // $user = User::find(Auth::user()->id);
        // $purchases = $user->purchases;
        $pdf = PDF::loadView('documents.invoice');
        ob_end_clean();
        return $pdf->download('invoice.pdf');
        //return view('dashboard_receipts.invoice');
    }
}
