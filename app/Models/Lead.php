<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Représente un prospect ayant soumis un formulaire du site (réservation coworking, devis, ou contact général)
class Lead extends Model
{
    protected $fillable = [
        'source',
        'fullname',
        'email',
        'metier',
        'commune',
        'espace',
        'espace_label',
        'duree',
        'duree_label',
        'prix',
        'subject',
        'message',
    ];
}
