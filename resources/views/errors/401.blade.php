{{-- Page d'erreur 401 : accès non autorisé (authentification requise ou invalide) --}}
{{-- Hérite de la mise en page générique errors::minimal --}}
@extends('errors::minimal')

{{-- Titre de l'onglet du navigateur --}}
@section('title', __('Unauthorized'))
{{-- Code HTTP affiché sur la page --}}
@section('code', '401')
{{-- Message d'erreur affiché à l'utilisateur --}}
@section('message', __('Unauthorized'))
