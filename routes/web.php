<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoworkingController;
use Illuminate\Support\Facades\Route;

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::get('/coworking', [CoworkingController::class, 'show'])->name('coworking');
Route::post('/coworking', [CoworkingController::class, 'send'])->name('coworking.send');

Route::get('/', function () {
    return view('home');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/studiopodcast', function () {
    return view('studiopodcast');
});

// Route::get('/test-404', function () {
//     abort(404);
// });



Route::get('/test-404', function(){
    abort(404);
});