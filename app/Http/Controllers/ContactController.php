<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        // Envoi de l'e-mail vers la boîte de contact de Sophos Congo
        Mail::to('contact@sophoscongo.com')->send(new ContactMail($data));

        return back()->with('success', 'Message envoyé avec succès !');
    }

}
