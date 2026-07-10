<?php

// Test de fonctionnalité (Feature) : vérifie que la page d'accueil
// répond correctement lorsqu'on effectue une requête HTTP GET.
it('returns a successful response', function () {
    // Simule une requête GET vers la racine du site.
    $response = $this->get('/');

    // Vérifie que la réponse a bien un code de statut HTTP 200 (succès).
    $response->assertStatus(200);
});
