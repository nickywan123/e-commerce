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
        $purchase->purchase_number = 'BSN' . Carbon::now()->format('Y') . str_pad($invoiceSequence, 6, "0", STR_PAD_LEFT); // BJN YYYY 00000101
        // Assign a status to the purchase. Unpaid, paid.
        $purchase->purchase_status = 1;
        // Assign the current date to the purchase in the form of DD/MM/YYYY.
        $purchase->purchase_date = Carbon::now()->format('d/m/Y');
        // Calculate total price of items in cart.
        $purchase_amount = 0;
        foreach ($cartItems as $cartItem) {
            $purchase_amount = $purchase_amount + $cartItem->total_price;
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
                $po_numbers[$cartItem->product->panel_account_id] = 'PO' . Carbon::now()->format('Y') . Carbon::now()->format('m') . ' ' . str_pad($poSequence, 6, "0", STR_PAD_LEFT); // PO YYYY MM 000001

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
            $order->order_status = 'Placed';
            // Assign empty value for order amount first.
            $orderAmount = 0;
            $order->order_amount = 0;
           
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
                    $item->subtotal_price = $cartItem->total_price;
                    // Assign status of the item. Placed, shipped, delivered.
                    $item->status_id = 1;
                    $item->save();

                    $orderAmount = $orderAmount + $cartItem->total_price;
                }
            }
            
            $order->order_amount = $orderAmount;
            $order->save();

            //Send the email to panel after placing order (attach with PO)
            
            Mail::to($order->panel->company_email)->send(new CheckoutOrder($order));
        
            $pdf = PDF::loadView('documents.invoice',compact('purchase'))->setPaper('a4'); 

            // Make a copy of the PDF invoice and store in public/storage/....
            $content = $pdf->download()->getOriginalContent();
             Storage::put('public/storage/documents/invoice/invoice_'.$purchase->purchase_number. '.pdf',$content) ;

            //Send email to customer after placing order( attach with invoice)
            $message = new InvoiceEmailCustomer($purchase);
            $message->attachData($pdf->output(), "invoice.pdf");     
            Mail::to($purchase->user->email)->send($message);
        }

        $paymentMethod = $request->input('options');
        // Check if offline payment or payment gateway -> then redirect to related page.

        // TODO: Temporary redirect to purchase tracking page.
        // If FPX, redirect to another page to POST submit to payment gateway.
        // Create controller method to handle the response.

        // If Card, redirect to another page to POST submit to payment gateway.
        // Create controller method to handle the response.

        // If Offline, redirect to another page for them to upload receipt.
        // Create controller method to handle file upload and update invoice + po status.

        if ($paymentMethod == 'offline') {
            return view('shop.payment.offline')->with('purchase', $purchase);
        } elseif ($paymentMethod == 'fpx') {
            return view('shop.payment.fpx')->with('purchase', $purchase);
        } elseif ($paymentMethod == 'credit') {
            return view('shop.payment.credit')->with('purchase', $purchase);
        }
    }

    /**
     * Payment Gateway payment method.
     */
    public function paymentGatewayRequest(Request $request)
    {
        //
    }

    /**
     * Payment Gateway response.
     */
    public function paymentGatewayResponse(Request $request)
    {
        // Update PO & Invoice status to paid.
        // Generate PDF of Invoice and PO.
        // Email to customer & panel.
    }

    public function offlinePaymentStore(Request $request)
    {
        return redirect('/shop/order');
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
