<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ExamReservation extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Exam Reservation';

    public $msg;
    public $email;
    public $name;
    public $price;
    public $exam;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($msg, $email, $name, $price, $exam)
    {
        $this->msg = $msg;
        $this->email = $email;
        $this->name = $name;
        $this->price = $price;
        $this->exam = $exam;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('external__emails.exam-reservation');
    }
}
