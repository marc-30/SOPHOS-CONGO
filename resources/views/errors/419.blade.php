{{-- Page d'erreur 419 : session/jeton CSRF expiré (formulaire soumis après expiration) --}}
{{-- Hérite de la mise en page générique errors::minimal --}}
@extends('errors::minimal')

{{-- Titre de l'onglet du navigateur --}}
@section('title', __('Page Expired'))
{{-- Code HTTP affiché sur la page --}}
@section('code', '419')
{{-- Message d'erreur affiché à l'utilisateur --}}
@section('message', __('Page Expired'))
