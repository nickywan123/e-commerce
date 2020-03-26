<?php

namespace App\Http\Controllers\Purchase;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Users\User;
use Auth;
use App\Models\Purchases\Purchase;
use Carbon\Carbon;
use App\Models\Purchases\Order;
use App\Models\Purchases\Item;
use App\Models\Users\Cart;

class PurchaseController extends Controller
{
    /**
     * Handle what happens after user clicks checkout
     */
    public function checkoutItems(Request $request)
    {
        // return $request->input('cartItemId');
        // Get user.
        $user = User::find(Auth::user()->id);
        // Get the items in the cart of user.
        $cartItems = Cart::whereIn('id', $request->input('cartItemId'))->get();

        // Initialize an empty array of PO Numbers
        $po_numbers = array(); // ['PO#1', 'PO#2', 'PO#3'];

        // Create a new purchase record.
        $purchase = new Purchase;
        // Assign user to the purchase record.
        $purchase->user_id = $user->id;
        // Generate a unique number used to identify the purchase.
        $purchase->purchase_number = 'INV-' . Carbon::now()->format('m') . '-' . mt_rand(11111, 99999);
        // Assign a status to the purchase. Unpaid, paid.
        $purchase->purchase_status = 1;
        // Assign the current date to the purchase in the form of DD/MM/YYYY.
        $purchase->purchase_date = Carbon::now()->format('d/m/Y');
        $purchase->save();

        $price = 0;
        // Create order record.
        // Foreach item in the cart..
        foreach ($cartItems as $cartItem) {
            // Create a new PO Number for each different panel belonging to an item.
            if (!array_key_exists($cartItem->product->panel->id, $po_numbers)) {
                $po_numbers[$cartItem->product->panel->id] = 'PO#' . mt_rand(11111, 99999);
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
            $order->save();

            $panelId = $key;

            // Foreach item in the cart..
            foreach ($cartItems as $cartItem) {
                // If the cart item product's panel id matches with the current panel id..
                if ($cartItem->product->panel->id == $panelId) {
                    // Create a new item record.
                    $item = new Item;
                    // Assign an order number to the item
                    $item->order_number = $order->order_number;
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
                }
            }
        }

        // Check if offline payment or payment gateway -> then redirect to related page.

        // TODO: Temporary redirect to purchase tracking page.
        return redirect('/shop/order');
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
        //
    }




 /**
  * Invoice response after customer purchase item
  */
  public function invoiceCustomer(){
      
    $user = User::find(Auth::user()->id);
    $purchases = $user->purchases;
    // return $purchases;
    return view('backups.dashboard_receipts.invoice')->with('purchases', $purchases);

      


  }

}
