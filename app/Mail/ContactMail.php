<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class ContactMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    private $message;

    
    
    public function __construct($message)
    {
        $this->message = $message;
    }

    

    public function build()
    {
        return $this->view('mails.example')->with([
            'password' => $this->message->password,
            'name' => $this->message->name
        ]);
    }
}

