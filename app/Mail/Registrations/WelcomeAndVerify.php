<?php

namespace App\Mail\Registrations;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WelcomeAndVerify extends Mailable
{
    use Queueable, SerializesModels;

    public $verifyUrl;
    protected $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($url, $user)
    {
        $this->verifyUrl = $url;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.registrations.welcome-and-verify')
            ->with('url' . $this->verifyUrl)
            ->with('user', $this->user);
    }
}
