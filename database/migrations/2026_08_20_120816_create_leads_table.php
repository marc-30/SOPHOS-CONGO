<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            // D'où vient le prospect : reservation (coworking), devis (bureau privatif) ou contact (formulaire général)
            $table->string('source');
            $table->string('fullname');
            $table->string('email');
            $table->string('metier')->nullable();
            $table->string('commune')->nullable();
            // Détails de la formule choisie, uniquement pour les demandes de réservation/devis coworking
            $table->string('espace')->nullable();
            $table->string('espace_label')->nullable();
            $table->string('duree')->nullable();
            $table->string('duree_label')->nullable();
            $table->string('prix')->nullable();
            // Détails du formulaire de contact général
            $table->string('subject')->nullable();
            $table->text('message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
