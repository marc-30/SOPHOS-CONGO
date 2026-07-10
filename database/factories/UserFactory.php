<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<User>
 */
// Fabrique (factory) permettant de générer des utilisateurs de test avec des données aléatoires
class UserFactory extends Factory
{
    /**
     * Le mot de passe courant utilisé par la fabrique (mis en cache pour éviter
     * de recalculer le hash à chaque génération d'utilisateur).
     */
    protected static ?string $password;

    /**
     * Définit l'état par défaut du modèle (les valeurs générées pour un nouvel utilisateur).
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            // Le mot de passe est haché une seule fois puis réutilisé pour toutes les instances générées
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indique que l'adresse e-mail du modèle doit être considérée comme non vérifiée.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
