<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\Orders\InvoiceEmailCustomer;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $purchase;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->purchase=$purchase;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // $email= new InvoiceEmailCustomer($purchase);

        // $pdf = PDF::loadView('documents.invoice',compact('purchase'))->setPaper('a4'); 
        // // Make a copy of the PDF invoice and store in public/storage/....
        // $content = $pdf->download()->getOriginalContent();
        //  Storage::put('public/storage/documents/invoice/invoice_'.$purchase->purchase_number. '.pdf',$content) ;

        // //Send email to customer after placing order( attach with invoice)
        // // $message = new InvoiceEmailCustomer($purchase);
        // // $message->attachData($pdf->output(), "invoice.pdf");     
        // // Mail::to($purchase->user->email)->send($message);
        // $email->attachData($pdf->output(), "invoice.pdf");   
        
        // Mail::to( $this->purchase['email'])->send($email);
        // // return $this->subject('Bujishu Order Confirmation - ' . $this->purchase->purchase_number)
        // // ->view('emails.orders.invoice-email-customer')->with('purchase', $this->purchase);
    }
}
