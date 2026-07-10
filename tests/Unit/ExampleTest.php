<?php

// Test unitaire d'exemple : vérifie simplement que l'assertion
// "true est vrai" fonctionne correctement (test de base fourni par Pest).
test('that true is true', function () {
    expect(true)->toBeTrue();
});
