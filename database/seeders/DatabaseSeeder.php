<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Seeder principal, exécuté via "php artisan db:seed" pour peupler la base de données de test
class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Peuple la base de données de l'application avec des données de test.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Crée un utilisateur de test fixe, utile pour se connecter en développement
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
