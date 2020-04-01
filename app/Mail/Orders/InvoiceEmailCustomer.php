<?php

namespace App\Mail\Orders;

use PDF;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Models\Purchases\Purchase;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InvoiceEmailCustomer extends Mailable
{
    use Queueable, SerializesModels;

    public $purchase;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Purchase $purchase)
    {
        $this->purchase=$purchase;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $pdf = PDF::loadView('documents.invoice')->setPaper('a4'); 
        return $this->subject('Bujishu Order Confirmation - ' . $this->purchase->purchase_number)
        ->view('emails.orders.invoice-email-customer')->with('purchase', $this->purchase);
    }
}
