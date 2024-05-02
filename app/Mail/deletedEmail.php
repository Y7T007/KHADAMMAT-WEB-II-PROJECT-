<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class deletedEmail extends Mailable
{
    use Queueable, SerializesModels;

 
    public $receiver;
   

    public function __construct($receiver)
    {
        $this->receiver = $receiver;
    
    }

    public function build()
    {
        return $this->view('emails.deleted');
    }
}
