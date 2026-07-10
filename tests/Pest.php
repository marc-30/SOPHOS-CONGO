<?php

use Tests\TestCase;

/*
|--------------------------------------------------------------------------
| Classe de test (Test Case)
|--------------------------------------------------------------------------
|
| La closure que vous fournissez à vos fonctions de test est toujours liée à une classe
| de test PHPUnit spécifique. Par défaut, cette classe est "PHPUnit\Framework\TestCase".
| Bien sûr, vous pouvez la changer via la fonction "pest()" pour lier d'autres classes ou traits.
|
*/

// Lie tous les tests du dossier "Feature" à la classe Tests\TestCase,
// ce qui leur donne accès aux fonctionnalités de test de Laravel (requêtes HTTP, etc.).
pest()->extend(TestCase::class)
 // ->use(Illuminate\Foundation\Testing\RefreshDatabase::class)
    ->in('Feature');

/*
|--------------------------------------------------------------------------
| Expectations (assertions personnalisées)
|--------------------------------------------------------------------------
|
| Lorsque vous écrivez des tests, vous devez souvent vérifier que des valeurs respectent
| certaines conditions. La fonction "expect()" vous donne accès à un ensemble de méthodes
| d'"expectations" que vous pouvez utiliser pour vérifier différentes choses. Bien sûr,
| vous pouvez étendre l'API d'Expectation à tout moment.
|
*/

// Ajoute une expectation personnalisée "toBeOne" qui vérifie qu'une valeur est égale à 1.
expect()->extend('toBeOne', function () {
    return $this->toBe(1);
});

/*
|--------------------------------------------------------------------------
| Fonctions
|--------------------------------------------------------------------------
|
| Bien que Pest soit très puissant nativement, vous pouvez avoir du code de test spécifique
| à votre projet que vous ne voulez pas répéter dans chaque fichier. Ici, vous pouvez aussi
| exposer des fonctions d'aide globales pour réduire le nombre de lignes de code dans vos
| fichiers de test.
|
*/

// Fonction d'aide (helper) d'exemple, actuellement vide, pouvant être réutilisée dans les tests.
function something()
{
    // ..
}
