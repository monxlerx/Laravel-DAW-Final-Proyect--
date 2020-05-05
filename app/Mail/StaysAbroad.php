<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class StaysAbroad extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Stay Abroad';

    public $msg;
    public $email;
    public $name;
    public $location;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($msg, $email, $name, $location)
    {
        $this->msg = $msg;
        $this->email = $email;
        $this->name = $name;
        $this->location = $location;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('external__emails.stay-abroad');
    }
}
