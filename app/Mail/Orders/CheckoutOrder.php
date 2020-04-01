<?php

namespace App\Mail\Orders;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Models\Purchases\Order;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class CheckoutOrder extends Mailable
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
        $this->order = $order;
    }

    /**
     * Build the message.
     * Email to panel after customer make payment
     * @return $this
     */
    
     public function build()
    {
        return $this->subject('Bujishu Order Confirmation - ' . $this->order->order_number)
            ->view('emails.orders.checkout-payment')->with('order', $this->order);
    }
}
