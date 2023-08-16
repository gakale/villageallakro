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
        Schema::create('maladies', function (Blueprint $table) {
            $table->id('id_maladies');
            $table->string('nom');
            $table->string('description');
            $table->string('symptomes');
            $table->string('traitement');
            $table->string('statut');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->unsignedBigInteger('id_epidemie');
            $table->foreign('id_epidemie')->references('id_epidemie')->on('epidemies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maladies');
    }
};
