<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoworkingController;
use Illuminate\Support\Facades\Route;

// Réception de la soumission du formulaire de contact (envoi de l'e-mail)
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// Page de présentation du coworking et réception des demandes de réservation
Route::get('/coworking', [CoworkingController::class, 'show'])->name('coworking');
Route::post('/coworking', [CoworkingController::class, 'send'])->name('coworking.send');

// Page d'accueil du site
Route::get('/', function () {
    return view('home');
});

// Page de présentation des services proposés
Route::get('/services', function () {
    return view('services');
});

// Page affichant le formulaire de contact
Route::get('/contact', function () {
    return view('contact');
});


// Page de présentation du studio podcast
Route::get('/studiopodcast', function () {
    return view('studiopodcast');
});

// Route::get('/test-404', function () {
//     abort(404);
// });


// Route de test permettant de déclencher volontairement une erreur 404 (vérification de la page d'erreur)
Route::get('/test-404', function(){
    abort(404);
});