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
        Schema::create('offre_emplois', function (Blueprint $table) {
            $table->id('id_offre_emploi');
            $table->string('titre');
            $table->string('description');
            $table->string('lieu');
            $table->string('type_contrat')->nullable();
            $table->string('salaire');
            $table->string('date_debut');
            $table->string('date_fin');
            $table->unsignedBigInteger('id_acteur'); // Si vous avez une relation avec le modèle Acteur
            $table->foreign('id_acteur')->references('id')->on('acteurs')->onDelete('cascade');
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offres_emploi');
    }
};
