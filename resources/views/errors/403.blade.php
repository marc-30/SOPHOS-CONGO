{{-- Page d'erreur 403 : accès interdit à la ressource demandée --}}
{{-- Hérite de la mise en page générique errors::minimal --}}
@extends('errors::minimal')

{{-- Titre de l'onglet du navigateur --}}
@section('title', __('Forbidden'))
{{-- Code HTTP affiché sur la page --}}
@section('code', '403')
{{-- Message d'erreur : utilise le message de l'exception s'il existe, sinon "Forbidden" par défaut --}}
@section('message', __($exception->getMessage() ?: 'Forbidden'))
