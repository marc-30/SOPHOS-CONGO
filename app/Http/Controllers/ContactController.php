<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Throwable;

// Contrôleur gérant le formulaire de contact du site
class ContactController extends Controller
{
    /**
     * Traite la soumission du formulaire de contact : valide les champs,
     * envoie l'e-mail à l'adresse de contact et redirige avec un message de succès.
     */
    public function send(Request $request)
    {
        // Validation des données du formulaire
        $data = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Conservation du prospect en base de données pour le suivi commercial
        Lead::create([
            'source'   => 'contact',
            'fullname' => $data['fullname'],
            'email'    => $data['email'],
            'subject'  => $data['subject'],
            'message'  => $data['message'],
        ]);

        // Envoi de l'e-mail en best-effort : le prospect est déjà enregistré en base,
        // un souci d'envoi ne doit donc jamais empêcher la confirmation à l'utilisateur.
        try {
            Mail::to('contact@sophoscongo.com')->send(new ContactMail($data));
        } catch (Throwable $e) {
            Log::error('Échec envoi e-mail de contact : ' . $e->getMessage());
        }

        return back()->with('success', 'Message envoyé avec succès !');
    }

}
