<?php

namespace App\Jobs\Emails\Orders;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use App\Mail\Orders\NewOrderPlaced;
use Mail;

class NewOrderSendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $customerEmailDetails;
    public $newOrder;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($newOrder, $customerEmailDetails)
    {
        $this->newOrder = $newOrder;
        $this->customerEmailDetails = $customerEmailDetails;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new NewOrderPlaced($this->newOrder, $this->customerEmailDetails);
        Mail::to($this->customerEmailDetails['toEmail'])->send($email);
    }
}
