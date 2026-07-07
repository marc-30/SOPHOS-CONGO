<?php

namespace App\Http\Controllers;

use App\Mail\CoworkingMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CoworkingController extends Controller
{
    private array $espaces = [
        'salle_climatisee' => 'Salle climatisée (1 place)',
        'terrasse_aeree'   => 'Terrasse aérée non-climatisée (1 place)',
        'bureau_prive'     => 'Bureau individuel privé climatisé',
        'salle_reunion'    => 'Salle de réunion privée climatisée (2–15 places)',
    ];

    private array $prices = [
        'salle_climatisee' => ['4h' => '20 000', 'nuit' => '30 000'],
        'terrasse_aeree'   => ['4h' => '15 000', 'nuit' => '20 000'],
        'bureau_prive'     => ['4h' => '30 000', 'nuit' => '40 000'],
        'salle_reunion'    => ['4h' => '150 000', 'nuit' => '250 000'],
    ];

    public function show()
    {
        return view('coworking');
    }

    public function send(Request $request)
    {
        $data = $request->validate([
            'fullname' => 'required|string|max:255',
            'metier'   => 'required|string|max:255',
            'commune'  => 'required|string|max:100',
            'espace'   => 'required|in:salle_climatisee,terrasse_aeree,bureau_prive,salle_reunion',
            'duree'    => 'required|in:4h,nuit',
        ]);

        $data['espace_label'] = $this->espaces[$data['espace']];
        $data['duree_label']  = $data['duree'] === '4h' ? '4 heures' : 'Toute la nuit';
        $data['prix']         = $this->prices[$data['espace']][$data['duree']] . ' FCFA';

        Mail::to('info@sophoscongo.com')->send(new CoworkingMail($data));

        return back()->with('success', 'Votre demande de réservation a bien été envoyée ! Notre équipe vous contactera très bientôt.');
    }
}
