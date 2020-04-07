<?php

namespace App\Http\Controllers\Purchase;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Globals\PaymentGateway\MerchantID;
use App\Models\Purchases\Purchase;
use App\Models\Users\Customers\PaymentInfo;
use App\Models\Users\User;
use Auth;

class PaymentGatewayController extends Controller
{
    /**
     * Submit a new payment gateway request.
     */
    public function paymentGatewayRequest(Request $request)
    {
        // return $request;
        $paymentOption = $request->input('payment_option');
        $orderId = $request->query('orderId');
        $savePaymentInfo = false;

        $purchase = Purchase::where('purchase_number', $orderId)->first();
        $user = User::find(Auth::user()->id);

        if ($request->input('save_payment_info')) {
            $savePaymentInfo = true;
        }

        // Handle if payment option card is selected.
        if ($paymentOption == 'card') {
            $merchantId = MerchantID::where('card_type', $request->input('card_type'))->first();

            if ($savePaymentInfo == true) {
                $paymentInfo = PaymentInfo::where('account_id', $user->userInfo->account_id)
                    ->where('card_number', $request->input('card_number'))->first();

                if (!$paymentInfo) {
                    $paymentInfo = new PaymentInfo;
                    $paymentInfo->account_id = $user->userInfo->account_id;
                    $paymentInfo->card_number = $request->input('card_number');
                    $paymentInfo->name_on_card = $request->input('name_on_card');
                    $paymentInfo->expiry_date = $request->input('expiry_date');
                    $paymentInfo->save();
                }

                $cvv2 = $request->input('cvv');
            } else {
                $paymentInfo = new PaymentInfo;
                $paymentInfo->account_id = $user->userInfo->account_id;
                $paymentInfo->card_number = $request->input('card_number');
                $paymentInfo->name_on_card = $request->input('name_on_card');
                $paymentInfo->expiry_date = $request->input('expiry_date');

                $cvv2 = $request->input('cvv');
            }

            return view('shop.payment.card.post-to-gateway')
                ->with('purchase', $purchase)
                ->with('paymentInfo', $paymentInfo)
                ->with('cvv2', $cvv2)
                ->with('merchantId', $merchantId);

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
        dd($request);
        // Receive payment gateway response.
        // Update Purchase & Order model.
        // Update Cart model (Set item status to 2003 => Item Checked Out).
    }
}
