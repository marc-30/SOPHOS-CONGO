<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

// Classe de base abstraite pour tous les tests de l'application.
// Elle étend la classe TestCase de Laravel, qui fournit l'accès à l'application
// (bootstrap du framework, client HTTP de test, assertions, etc.).
// Toutes les classes de test du projet doivent hériter de celle-ci.
abstract class TestCase extends BaseTestCase
{
    // Aucune personnalisation supplémentaire pour l'instant : on utilise
    // le comportement par défaut fourni par Laravel.
}
