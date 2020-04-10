<?php

namespace App\Http\Controllers\Purchase;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Globals\Cards\Issuer;
use App\Models\Globals\PaymentGateway\MerchantID;
use App\Models\Purchases\Payment;
use App\Models\Purchases\Purchase;
use App\Models\Users\Customers\PaymentInfo;
use App\Models\Users\User;
use Auth;
use Illuminate\Support\Facades\URL;
use App\Models\Categories\Category;
use Illuminate\Support\Facades\View;

class PaymentGatewayController extends Controller
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

            $cardIssuer = Issuer::where('issuer_name', $request->input('card_type'))->first();

            if ($savePaymentInfo == true) {
                $paymentInfo = PaymentInfo::where('account_id', $user->userInfo->account_id)
                    ->where('card_number', $request->input('card_number'))->first();

                if (!$paymentInfo) {
                    $paymentInfo = new PaymentInfo;
                    $paymentInfo->account_id = $user->userInfo->account_id;
                    $paymentInfo->card_number = $request->input('card_number');
                    $paymentInfo->issuer_id = $cardIssuer->id;
                    $paymentInfo->name_on_card = $request->input('name_on_card');
                    $paymentInfo->expiry_date = $request->input('expiry_date');
                    $paymentInfo->save();
                }

                $cvv2 = $request->input('cvv');
            } else {
                $paymentInfo = new PaymentInfo;
                $paymentInfo->account_id = $user->userInfo->account_id;
                $paymentInfo->card_number = $request->input('card_number');
                $paymentInfo->issuer_id = $cardIssuer->id;
                $paymentInfo->name_on_card = $request->input('name_on_card');
                $paymentInfo->expiry_date = $request->input('expiry_date');

                $cvv2 = $request->input('cvv');
            }

            $responseUrl = URL::to('/payment/gateway-response');

            return view('shop.payment.card.post-to-gateway')
                ->with('purchase', $purchase)
                ->with('paymentInfo', $paymentInfo)
                ->with('cvv2', $cvv2)
                ->with('merchantId', $merchantId)
                ->with('responseUrl', $responseUrl);

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
        // dd($request);

        $user = User::find(Auth::user()->id);

        $response = $request->input('response');

        if ($response == '00') {
            // Success
            $purchase = Purchase::where('purchase_number', $request->input('invoiceNo'))->firstOrFail();
            $payment = new Payment;
            $payment->purchase_number = $purchase->purchase_number;
            $payment->gateway_string_result = $request->input('result');
            $payment->gateway_response_code = $request->input('response');
            $payment->auth_code = $request->input('authCode');
            $payment->last_4_card_number = $request->input('PAN');
            $payment->expiry_date = $request->input('expiryDate');
            $payment->amount = $request->input('amount');
            $payment->gateway_eci = $request->input('ECI');
            $payment->gateway_security_key_res = $request->input('securityKeyRes');
            $payment->gateway_hash = $request->input('hash');
            $payment->save();

            $purchase->purchase_status = 2;
            $purchase->save();

            foreach ($purchase->orders as $order) {
                $order->order_status = 2;
                $order->save();
            }

            foreach ($user->carts as $cartItem) {
                $cartItem->status = 2003;
                $cartItem->save();
            }

            $purchaseNumberFormatted = $str2 = substr($purchase->purchase_number, 7);

            return view('shop.payment.success')
                ->with('purchase', $purchase)
                ->with('purchaseNumberFormatted', $purchaseNumberFormatted);
        } else {
            // Error
            return 'Failed' . $request->input('result');
        }


        // Receive payment gateway response.
        // Update Purchase & Order model.
        // Update Cart model (Set item status to 2003 => Item Checked Out).
    }
}
