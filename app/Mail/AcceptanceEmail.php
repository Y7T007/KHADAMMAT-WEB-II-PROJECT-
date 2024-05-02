<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AcceptanceEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $sender;
    public $receiver;
    public $service;

    public function __construct($sender, $receiver, $service)
    {
        $this->sender = $sender;
        $this->receiver = $receiver;
        $this->service = $service;
    }

    public function build()
    {
        return $this->view('emails.acceptance');
    }
}
