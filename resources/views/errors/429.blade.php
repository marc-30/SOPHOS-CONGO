{{-- Page d'erreur 429 : trop de requêtes envoyées (limitation de débit / rate limiting) --}}
{{-- Hérite de la mise en page générique errors::minimal --}}
@extends('errors::minimal')

{{-- Titre de l'onglet du navigateur --}}
@section('title', __('Too Many Requests'))
{{-- Code HTTP affiché sur la page --}}
@section('code', '429')
{{-- Message d'erreur affiché à l'utilisateur --}}
@section('message', __('Too Many Requests'))
