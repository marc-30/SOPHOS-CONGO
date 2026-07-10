{{-- Page d'erreur 503 : service temporairement indisponible (ex : maintenance) --}}
{{-- Hérite de la mise en page générique errors::minimal --}}
@extends('errors::minimal')

{{-- Titre de l'onglet du navigateur --}}
@section('title', __('Service Unavailable'))
{{-- Code HTTP affiché sur la page --}}
@section('code', '503')
{{-- Message d'erreur affiché à l'utilisateur --}}
@section('message', __('Service Unavailable'))
