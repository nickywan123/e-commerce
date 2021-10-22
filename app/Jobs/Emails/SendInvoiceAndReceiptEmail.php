<?php

namespace App\Jobs\Emails;

use App\Mail\Purchase\InvoiceAndReceiptEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class SendInvoiceAndReceiptEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 5;

    protected $emailAddress;
    public $purchase;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($emailAddress, $purchase)
    {
        $this->emailAddress = $emailAddress;
        $this->purchase = $purchase;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $emailInstance = new InvoiceAndReceiptEmail($this->purchase);
        Mail::to($this->emailAddress)->send($emailInstance);
    }
}
