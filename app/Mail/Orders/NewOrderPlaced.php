<?php

namespace App\Mail\Orders;

use App\Models\Orders\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewOrderPlaced extends Mailable
{
    use Queueable, SerializesModels;

    protected $customerEmailDetails = array();
    public $newOrder;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $newOrder, $customerEmailDetails)
    {
        $this->newOrder = $newOrder;
        $this->customerEmailDetails = $customerEmailDetails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Your Bujishu Order Confirmation - ' . $this->newOrder->order_id)
            ->view('emails.orders.order-placed')
            ->with('order', $this->newOrder);
    }
}
