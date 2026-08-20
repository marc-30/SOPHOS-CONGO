<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

// Envoie des e-mails via l'API HTTP de Mailtrap Sending (send.api.mailtrap.io).
// Utilisé à la place du SMTP classique : sur ce compte, le SMTP refuse l'authentification
// malgré un jeton API valide, alors que l'API HTTP fonctionne parfaitement avec le même jeton.
class MailtrapApiMailer
{
    /**
     * Envoie un e-mail HTML à un destinataire.
     *
     * @param string $toEmail Adresse du destinataire
     * @param string $toName Nom du destinataire
     * @param string $subject Sujet de l'e-mail
     * @param string $html Corps HTML déjà rendu
     * @return bool Succès de l'envoi
     */
    public function send(string $toEmail, string $toName, string $subject, string $html): bool
    {
        $response = Http::withToken(config('services.mailtrap.token'))
            ->post(config('services.mailtrap.url'), [
                'from' => [
                    'email' => config('mail.from.address'),
                    'name'  => config('mail.from.name'),
                ],
                'to' => [
                    ['email' => $toEmail, 'name' => $toName],
                ],
                'subject' => $subject,
                'html'    => $html,
            ]);

        if (! $response->successful()) {
            logger()->error('Échec envoi Mailtrap API : ' . $response->body());
        }

        return $response->successful();
    }
}
