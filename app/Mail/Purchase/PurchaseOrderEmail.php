<?php

namespace App\Mail\Purchase;

use App\Models\Purchases\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PurchaseOrderEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $order;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        //
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('An Order Has Been Placed - ' . $this->order->order_number)
            ->view('emails.purchases.po-email')
            ->with('order', $this->order)
            ->attach(public_path(
                '/storage/documents/invoice/' . $this->order->purchase->purchase_number . '/purchase-orders/' . $this->order->order_number . '.pdf'
            ));
    }
}
