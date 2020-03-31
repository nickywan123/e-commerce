<?php

namespace App\Mail\Orders;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Orders\Order;

class CheckoutOrder extends Mailable
{
    use Queueable, SerializesModels;

    public $newOrder;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order=$order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Your Bujishu Order Confirmation - ' . $this->order->order_number)
                     ->view('emails.orders.checkout-payment');
    }
}
