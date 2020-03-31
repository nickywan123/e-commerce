<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Orders\Order;

use PDF;

/**
 *  Controller to handle dashboard for panel
 */



class DashboardController extends Controller
{

    // Display all customer info related to panel on panel dashboard
    public function index()
    {
        $customerOrders = Order::all();

        return view('panel.panel')->with('customerOrders', $customerOrders);
    }

    //Display product page for customer to upload products
    public function productForm()
    {
        return view("panel.product");
    }

    /**
     * Return Purchase Order for Panel
     */
    public function viewPurchaseOrder()
    {
        // return view('documents.purchase_order');
        $pdf = PDF::loadView('documents.purchase-order');
        return $pdf->stream('invoice.pdf');
    }
}
