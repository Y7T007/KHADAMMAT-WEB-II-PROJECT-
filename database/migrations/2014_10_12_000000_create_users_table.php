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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('type'); // Colonne pour le type d'utilisateur (Client, Partenaire, Admin)
            $table->string('address')->nullable(); // Adresse commune à tous les types d'utilisateurs
            $table->float('note')->nullable(); // Note commune à tous les types d'utilisateurs
            // Colonne spécifique aux partenaires
            $table->string('photo')->nullable(); // Champ pour l'image de l'utilisateur (chemin ou nom du fichier)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
