<?php

namespace App\Http\Controllers\Purchase;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jobs\Emails\SendInvoiceAndReceiptEmail;
use App\Jobs\Emails\SendPurchaseOrderEmail;
use App\Models\Globals\Cards\Issuer;
use App\Models\Globals\PaymentGateway\MerchantID;
use App\Models\Purchases\Payment;
use App\Models\Purchases\Purchase;
use App\Models\Users\Customers\PaymentInfo;
use App\Models\Users\User;
use Auth;
use Illuminate\Support\Facades\URL;
use App\Models\Categories\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use PDF;

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
                $this->cart = Auth::user()->carts->where('status', 2001)->sum('quantity');
            }
            // Get all categories, with subcategories and its images.
            $categories = Category::topLevelCategory();

            // Share the above variable with all views in this controller.
            View::share('categories', $categories);
            View::share('getCartQuantity', $this->cart);

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

        $purchase->purchase_type = $paymentOption;
        $purchase->save();

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

        // Handle if payment option offline is selected.
        if ($paymentOption == 'offline') {
            $file = $request->file('payment_proof');
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = $purchase->purchase_number . '-payment' . '.' . $fileExtension;
            $destinationPath =
                public_path('/storage/uploads/images/users/' . $purchase->user->userInfo->account_id . '/payments');

            $filename = $purchase->purchase_number . 'payment-proof';

            if (!File::isDirectory($destinationPath)) {
                File::makeDirectory($destinationPath, 0777, true);
            }
            $file->move($destinationPath, $fileName);

            $purchase->payment_proof =
                '/storage/uploads/images/users/' . $purchase->user->userInfo->account_id . '/payments' . $fileName;

            $purchase->offline_reference = $request->input('reference_number');
            $purchase->offline_payment_amount = $request->input('payment_amount');

            $purchase->purchase_status = 3003; // Pending Review - Offline

            $purchase->save();

            $purchaseNumberFormatted = $str2 = substr($purchase->purchase_number, 7);

            // TODO: Move this to OfflinePaymentController later!
            // Admin is supposed to verify offline payment first before it is labeled success.
            // Temporary solution for deadlines on 17/04/2020.
            $payment = new Payment;
            $payment->purchase_number = $purchase->purchase_number;
            $payment->gateway_string_result = '-';
            $payment->gateway_response_code = '00';
            $payment->auth_code = $request->input('reference_number');
            $payment->last_4_card_number = '-';
            $payment->expiry_date = '-';
            $payment->amount = $purchase->purchase_amount;
            $payment->gateway_eci = '-';
            $payment->gateway_security_key_res = '-';
            $payment->gateway_hash = '-';
            $payment->save();

            foreach ($purchase->orders as $order) {
                // Generate PO PDF.
                // Generate PDF.
                $pdf = PDF::loadView('documents.order.purchase-order', compact('order'));
                // Get PDF content.
                $content = $pdf->download()->getOriginalContent();
                // Set path to store PDF file.
                $pdfDestination = public_path('/storage/documents/invoice/' . $purchase->purchase_number . '/purchase-orders/');
                // Set PDF file name.
                $pdfName = $order->order_number;
                // Check if directory exist or not.
                if (!File::isDirectory($pdfDestination)) {
                    // If not exist, create the directory.
                    File::makeDirectory($pdfDestination, 0777, true);
                }
                // Place the PDF into directory.
                File::put($pdfDestination . $pdfName . '.pdf', $content);

                // Queue PO email to panels.
                SendPurchaseOrderEmail::dispatch($order->panel->company_email, $order);
            }

            // Generate Invoice PDF.
            // Generate PDF.
            $pdf = PDF::loadView('documents.purchase.invoice', compact('purchase'));
            // Get PDF content.
            $content = $pdf->download()->getOriginalContent();
            // Set path to store PDF file.
            $pdfDestination = public_path('/storage/documents/invoice/' . $purchase->purchase_number . '/');
            // Set PDF file name.
            $pdfName = $purchase->purchase_number;
            // Check if directory exist or not.
            if (!File::isDirectory($pdfDestination)) {
                // If not exist, create the directory.
                File::makeDirectory($pdfDestination, 0777, true);
            }
            // Place the PDF into directory.
            File::put($pdfDestination . $pdfName . '.pdf', $content);

            // Generate Receipt PDF.
            // Generate PDF.
            $pdf = PDF::loadView('documents.receipt.receipt', compact('purchase'));
            // Get PDF content.
            $content = $pdf->download()->getOriginalContent();
            // Set path to store PDF file.
            $pdfDestination = public_path('/storage/documents/invoice/' . $purchase->purchase_number . '/');
            // Set PDF file name.
            $pdfName = $purchase->purchase_number . '-receipt';
            // Check if directory exist or not.
            if (!File::isDirectory($pdfDestination)) {
                // If not exist, create the directory.
                File::makeDirectory($pdfDestination, 0777, true);
            }
            // Place the PDF into directory.
            File::put($pdfDestination . $pdfName . '.pdf', $content);

            // Queue Invoice email to customer.
            SendInvoiceAndReceiptEmail::dispatch($user->email, $purchase);

            // TODO: Move this to OfflinePaymentController later!
            // Admin is supposed to verify offline payment first before it is labeled success.
            // Temporary solution for deadlines on 17/04/2020.
            foreach ($user->carts as $cartItem) {
                $cartItem->status = 2003;
                $cartItem->save();
            }

            return view('shop.payment.success')
                ->with('purchase', $purchase)
                ->with('purchaseNumberFormatted', $purchaseNumberFormatted);
        }
        //
    }

    /**
     * Handles payment gateway response.
     */
    public function paymentGatewayResponse(Request $request)
    {
        // Card payment gateway.

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

            $purchase->purchase_status = 3001;
            $purchase->save();

            foreach ($purchase->orders as $order) {
                $order->order_status = 1001;
                $order->save();

                // Generate PO PDF.
                // Generate PDF.
                $pdf = PDF::loadView('documents.order.purchase-order', compact('order'));
                // Get PDF content.
                $content = $pdf->download()->getOriginalContent();
                // Set path to store PDF file.
                $pdfDestination = public_path('/storage/documents/invoice/' . $purchase->purchase_number . '/purchase-orders/');
                // Set PDF file name.
                $pdfName = $order->order_number;
                // Check if directory exist or not.
                if (!File::isDirectory($pdfDestination)) {
                    // If not exist, create the directory.
                    File::makeDirectory($pdfDestination, 0777, true);
                }
                // Place the PDF into directory.
                File::put($pdfDestination . $pdfName . '.pdf', $content);

                // Queue sending PO email.
                SendPurchaseOrderEmail::dispatch($order->panel->company_email, $order);
            }

            foreach ($user->carts as $cartItem) {
                $cartItem->status = 2003;
                $cartItem->save();
            }

            // Generate Invoice PDF.
            // Generate PDF.
            $pdf = PDF::loadView('documents.purchase.invoice', compact('purchase'));
            // Get PDF content.
            $content = $pdf->download()->getOriginalContent();
            // Set path to store PDF file.
            $pdfDestination = public_path('/storage/documents/invoice/' . $purchase->purchase_number . '/');
            // Set PDF file name.
            $pdfName = $purchase->purchase_number;
            // Check if directory exist or not.
            if (!File::isDirectory($pdfDestination)) {
                // If not exist, create the directory.
                File::makeDirectory($pdfDestination, 0777, true);
            }
            // Place the PDF into directory.
            File::put($pdfDestination . $pdfName . '.pdf', $content);

            // Generate Receipt PDF.
            // Generate PDF.
            $pdf = PDF::loadView('documents.receipt.receipt', compact('purchase'));
            // Get PDF content.
            $content = $pdf->download()->getOriginalContent();
            // Set path to store PDF file.
            $pdfDestination = public_path('/storage/documents/invoice/' . $purchase->purchase_number . '/');
            // Set PDF file name.
            $pdfName = $purchase->purchase_number . '-receipt';
            // Check if directory exist or not.
            if (!File::isDirectory($pdfDestination)) {
                // If not exist, create the directory.
                File::makeDirectory($pdfDestination, 0777, true);
            }
            // Place the PDF into directory.
            File::put($pdfDestination . $pdfName . '.pdf', $content);

            SendInvoiceAndReceiptEmail::dispatch($user->email, $purchase);

            $purchaseNumberFormatted = $str2 = substr($purchase->purchase_number, 7);

            return view('shop.payment.success')
                ->with('purchase', $purchase)
                ->with('purchaseNumberFormatted', $purchaseNumberFormatted);
        } else {
            // Error
            $errorMessage = $request->input('result');

            return view('shop.payment.failed')
                ->with('errorMessage', $errorMessage);
        }


        // Receive payment gateway response.
        // Update Purchase & Order model.
        // Update Cart model (Set item status to 2003 => Item Checked Out).
    }

    public function errorPage()
    {
        return view('shop.payment.failed');
    }
}
