<?php

namespace App\Http\Controllers\Purchase;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentGatewayController extends Controller
{
    /**
     * Submit a new payment gateway request.
     */
    public function paymentGatewayRequest(Request $request)
    {

        $paymentOption = $request->input('payment_option');
        $orderId = $request->query('orderId');
        $savePaymentInfo = false;

        if ($request->input('save_payment_info')) {
            $savePaymentInfo = true;
        }

        // Handle if payment option card is selected.
        if ($paymentOption == 'card') {
            if ($savePaymentInfo == true) {
                // Handle saving payment info.
            }

            // Handle credit/debit payment option.
        }

        // Handle if payment option fpx is selected.
        if ($paymentOption == 'fpx') {
            // Handle fpx payment option
        }

        return $request;
        //
    }

    /**
     * Handles payment gateway response.
     */
    public function paymentGatewayResponse(Request $request)
    {
        // Receive payment gateway response.
        // Update Purchase & Order model.
        // Update Cart model (Set item status to 2003 => Item Checked Out).
    }
}
