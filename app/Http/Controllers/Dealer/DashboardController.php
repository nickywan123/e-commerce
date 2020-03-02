<?php

namespace App\Http\Controllers\Dealer;

use App\Http\Controllers\Controller;
use App\Models\Orders\Order;


use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function dashboard()
    {
        // Read value from Model method
        $customerOrders = Order::all();



        return view('dealer.dealer')->with('customerOrders', $customerOrders);
    }
    /**
     * Return statement for Dealer
     */

    public function statements()
    {

        return view('dealer.dealer_statement');
    }

    /**
     * Return invoice for Dealer
     */
    public function viewInvoice()
    {

        return view('dashboard_receipts.invoice');
    }

    /**
     * Return Purchase Order for Dealer
     */
    public function viewPurchaseOrder()
    {

        return view('dashboard_receipts.purchase_order');
    }
}