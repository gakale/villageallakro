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
        Schema::create('information_affaires', function (Blueprint $table) {
            $table->id('id_info_affaires');
            $table->string('nom');
            $table->text('description');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('responsable');
            $table->string('lieu');
            $table->string('statut');
            $table->String('budget');
            $table->unsignedBigInteger('acteur_id'); // Si vous avez une relation avec le modèle Acteur
            $table->foreign('acteur_id')->references('id')->on('acteurs')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informations_affaires');
    }
};
