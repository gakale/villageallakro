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
        Schema::create('pharmacies', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('email');
            $table->string('horaire_ouverture');
            $table->string('horaire_fermeture');
            $table->string('responsable');
            $table->string('image');
            $table->string('statut');
            $table->unsignedBigInteger('id_centre_sante'); // Si vous avez une relation avec le modèle Centre_sante
            $table->foreign('id_centre_sante')->references('id')->on('centre_santes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pharmacies');
    }
};
