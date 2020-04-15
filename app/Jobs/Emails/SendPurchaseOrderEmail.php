<?php

namespace App\Jobs\Emails;

use App\Mail\Purchase\PurchaseOrderEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class SendPurchaseOrderEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $emailAddress;
    public $order;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($emailAddress, $order)
    {
        $this->emailAddress = $emailAddress;
        $this->order = $order;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $emailInstance = new PurchaseOrderEmail($this->order);
        Mail::to($this->emailAddress)->send($emailInstance);
    }
}
