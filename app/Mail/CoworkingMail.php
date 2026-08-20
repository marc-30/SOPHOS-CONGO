<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

// Représente l'e-mail envoyé lors d'une demande de réservation d'espace de coworking
class CoworkingMail extends Mailable
{
    // Données de la demande de réservation (nom, métier, commune, espace choisi, durée, prix, etc.)
    public array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    // Construit l'e-mail : le sujet inclut le nom du demandeur, avec le template dédié.
    // replyTo() pointe vers l'email du client : un simple "Répondre" dans la boîte suffit pour le relancer.
    public function build()
    {
        return $this->subject('Nouvelle demande de coworking — ' . $this->data['fullname'])
                    ->replyTo($this->data['email'], $this->data['fullname'])
                    ->view('emails.coworking');
    }
}
