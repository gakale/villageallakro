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
        Schema::create('promotion_artisanales', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('description');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->integer('pourcentage');
            $table->string('etat');
            $table->string('photo');
            $table->string('statut');
            $table->unsignedBigInteger('id_artisanales');
            $table->foreign('id_artisanales')->references('id')->on('artisanales');
            $table->unsignedBigInteger('id_acteur'); // Si vous avez une relation avec le modèle Acteur
            $table->foreign('id_acteur')->references('id')->on('acteurs')->onDelete('cascade');
            $table->string('redution');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotion_artisanales');
    }
};
