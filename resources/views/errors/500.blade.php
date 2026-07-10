{{-- Page d'erreur 500 : erreur interne du serveur --}}
{{-- Hérite de la mise en page générique errors::minimal --}}
@extends('errors::minimal')

{{-- Titre de l'onglet du navigateur --}}
@section('title', __('Server Error'))
{{-- Code HTTP affiché sur la page --}}
@section('code', '500')
{{-- Message d'erreur affiché à l'utilisateur --}}
@section('message', __('Server Error'))
