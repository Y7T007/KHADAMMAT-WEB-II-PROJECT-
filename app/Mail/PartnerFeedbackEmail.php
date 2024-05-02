<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PartnerFeedbackEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $sender;
    public $receiver;
    public $service;

    public function __construct($sender, $receiver)
    {
        $this->sender = $sender;
        $this->receiver = $receiver;
   
    }

    public function build()
    {
        return $this->view('emails.PartenerFeedback');
    }
}
