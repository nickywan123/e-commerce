<?php

namespace App\Mail\Purchase;

use App\Models\Purchases\Purchase;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InvoiceAndReceiptEmail extends Mailable
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
        $this->purchase = $purchase;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Bujishu Order Confirmation - ' . $this->purchase->purchase_number)
            ->view('emails.purchases.invoice-receipt-email')
            ->with('purchase', $this->purchase)
            ->attach(public_path(
                '/storage/documents/invoice/' . $this->purchase->purchase_number . '/' . $this->purchase->purchase_number . '.pdf'
            ));
    }
}
