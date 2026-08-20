<?php

namespace App\Http\Controllers;

use App\Mail\CoworkingMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

// Contrôleur gérant l'affichage de la page coworking et les demandes de réservation d'espace
class CoworkingController extends Controller
{
    // Libellés lisibles des différents espaces de Sophos Space, indexés par leur clé technique
    // (alignés sur les 4 espaces officiels du catalogue Sophos Space)
    private array $espaces = [
        'coworking'       => 'Coworking',
        'bureau_prive'    => 'Bureau privatif',
        'salle_reunion'   => 'Salle de réunion',
        'salle_formation' => 'Salle de formation (jusqu\'à 60 personnes)',
    ];

    // Grille tarifaire (en FCFA) par espace et par durée, reprise telle quelle du catalogue.
    // Le bureau privatif n'a pas de prix fixe (location sur contrat) et n'apparaît donc pas ici.
    private array $prices = [
        'coworking'       => ['jour' => '5 000', 'semaine' => '30 000', 'mois' => '100 000'],
        'salle_reunion'   => ['4h' => '25 000', 'journee' => '50 000'],
        'salle_formation' => ['4h' => '50 000', 'journee' => '90 000'],
    ];

    // Libellés lisibles des durées, toutes options confondues
    private array $dureeLabels = [
        'jour'      => 'À la journée',
        'semaine'   => 'À la semaine',
        'mois'      => 'Au mois',
        '4h'        => 'Demi-journée (4h)',
        'journee'   => 'Journée complète',
        'sur_devis' => 'Sur devis',
    ];

    // Affiche la page de présentation du coworking avec le formulaire de réservation
    public function show()
    {
        return view('coworking');
    }

    /**
     * Traite la demande de réservation d'un espace de coworking : valide les champs,
     * enrichit les données avec les libellés et le prix correspondant, puis envoie l'e-mail.
     */
    public function send(Request $request)
    {
        // Validation des données du formulaire de réservation
        $data = $request->validate([
            'fullname' => 'required|string|max:255',
            'email'    => 'required|email|max:255',
            'metier'   => 'required|string|max:255',
            'commune'  => 'required|string|max:100',
            'espace'   => 'required|in:coworking,bureau_prive,salle_reunion,salle_formation',
            'duree'    => 'required|in:jour,semaine,mois,4h,journee,sur_devis',
        ]);

        // Ajout des informations lisibles (libellés et prix) à partir des clés techniques soumises
        $data['espace_label'] = $this->espaces[$data['espace']];
        $data['duree_label']  = $this->dureeLabels[$data['duree']];

        // Le bureau privatif est loué sur contrat : pas de prix fixe dans la grille tarifaire
        if ($data['espace'] === 'bureau_prive') {
            $data['prix'] = 'Sur devis';
        } else {
            abort_unless(isset($this->prices[$data['espace']][$data['duree']]), 422, 'Combinaison espace / durée invalide.');
            $data['prix'] = $this->prices[$data['espace']][$data['duree']] . ' FCFA';
        }

        // Envoi de la demande de réservation par e-mail à l'équipe Sophos Congo
        Mail::to('reservation@sophoscongo.com')->send(new CoworkingMail($data));

        return back()->with('success', 'Votre demande de réservation a bien été envoyée ! Notre équipe vous contactera très bientôt.');
    }
}
