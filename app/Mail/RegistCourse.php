<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegistCourse extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Registered Course';

    public $msg;
    public $email;
    public $name;
    public $price;
    public $title;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($msg, $email, $name, $price, $title)
    {
        $this->msg = $msg;
        $this->email = $email;
        $this->name = $name;
        $this->price = $price;
        $this->title = $title;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('external__emails.registered-course');
    }
}
