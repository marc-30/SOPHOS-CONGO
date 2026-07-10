{{-- Page d'erreur 402 : paiement requis pour accéder à la ressource --}}
{{-- Hérite de la mise en page générique errors::minimal --}}
@extends('errors::minimal')

{{-- Titre de l'onglet du navigateur --}}
@section('title', __('Payment Required'))
{{-- Code HTTP affiché sur la page --}}
@section('code', '402')
{{-- Message d'erreur affiché à l'utilisateur --}}
@section('message', __('Payment Required'))
