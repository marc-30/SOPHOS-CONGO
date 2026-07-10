{{-- Page d'erreur 404 : ressource ou page introuvable --}}
{{-- Hérite de la mise en page générique errors::minimal --}}
@extends('errors::minimal')

{{-- Titre de l'onglet du navigateur --}}
@section('title', __('Page non trouvé'))
{{-- Code HTTP affiché sur la page --}}
@section('code', '404')
{{-- Message d'erreur affiché à l'utilisateur --}}
@section('message', __('Page non trouvé'))
