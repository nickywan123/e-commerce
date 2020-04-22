<?php

namespace App\Http\Controllers\Shop;

use PDF;
use App\Models\Users\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ValueRecordsController extends Controller
{
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
}
