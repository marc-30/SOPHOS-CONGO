<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class CoworkingMail extends Mailable
{
    public array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('Nouvelle demande de coworking — ' . $this->data['fullname'])
                    ->view('emails.coworking');
    }
}
