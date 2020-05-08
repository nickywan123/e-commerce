<?php

namespace App\Http\Controllers\Shop;

use PDF;
use App\Models\Users\User;
use App\Models\Purchases\Purchase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users\Customers\Favorite;
use Illuminate\Support\Facades\Auth;

class ValueRecordsController extends Controller
{


    /****Return All Orders in customer dashboard  ****/

    public function customerAllOrders()
    {
        $user = User::find(Auth::user()->id);
        // Return purchases that user have paid
        $statuses = [3001, 3002, 3003];
        // $order_status = [1000];
        // $purchases = $user->purchases->whereIn('purchase_status', $statuses);
        // $totalOrders = $purchases->sum('orders_count');
        $purchases = Purchase::where('user_id', $user->id)->whereIn('purchase_status', $statuses)
            ->withCount('orders')->get();


        return view('shop.customer-dashboard.value-records.index')->with('purchases', $purchases);
    }

    /*******Return Open Orders in customer dashboard******/

    public function openOrders()
    {
        $user = User::find(Auth::user()->id);
        // Return purchases that user have paid
        // $statuses = [3001, 3002, 3003];
        // $purchases = $user->purchases->where('purchase_status', 3000)->withCount('orders')->get();
        // $annualOrders= $user->purchases->orders->whereYear('created_at', '=', 2020)->get();
        $purchases = Purchase::where('user_id', $user->id)->where('purchase_status', 3000)
            ->withCount('orders')->get();

        return view('shop.customer-dashboard.value-records.open-orders')->with('purchases', $purchases);
    }

    /*******Return Order Status in customer dashboard******/

    public function orderStatus()
    {
        $user = User::find(Auth::user()->id);
        // Return purchases that user have paid
        $statuses = [3001, 3002, 3003];
        // $purchases = $user->purchases->whereIn('purchase_status', $statuses);
        $purchases = Purchase::where('user_id', $user->id)->whereIn('purchase_status', $statuses)
            ->withCount('orders')->get();

        return view('shop.customer-dashboard.value-records.order-status')->with('purchases', $purchases);
    }







    /** Show invoice of the order (PDF)**/

    public function invoice($purchase_num)
    {
        // Get user.
        $user = User::find(Auth::user()->id);
        $purchase = $user->purchases->where('purchase_number', $purchase_num)->first();
        $pdf = PDF::loadView('documents.purchase.invoice', compact('purchase'))->setPaper('A4');
        return $pdf->stream('purchase-order.' . $purchase_num . '.pdf');
    }


    /***Show receipt of order (PDF)***/

    public function receipt($purchase_num)
    {

        // Get user.
        $user = User::find(Auth::user()->id);
        $purchase = $user->purchases->where('purchase_number', $purchase_num)->first();
        $pdf = PDF::loadView('documents.receipt.receipt', compact('purchase'))->setPaper('A4');
        return $pdf->stream('receipt-.' . $purchase_num . '.pdf');
    }


    /**Return wishlist for user */
    public function wishlist()
    {
        // Get user.
        $user = User::find(Auth::user()->id);
        //Get favourite item for user
        $favourite = $user->favorites->all();
        // dd($favourite);

        return view('shop.customer-dashboard.value-records.wishlist')->with('favourite', $favourite);
    }
}
