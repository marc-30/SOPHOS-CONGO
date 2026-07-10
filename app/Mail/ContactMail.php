<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

// Représente l'e-mail envoyé lors d'une soumission du formulaire de contact
class ContactMail extends Mailable
{
    // Données du formulaire de contact (nom, email, sujet, message)
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    // Construit l'e-mail : le sujet reprend celui saisi par l'utilisateur, avec le template dédié
    public function build()
    {
        return $this->subject($this->data['subject'])->view('emails.contact');
    }
}