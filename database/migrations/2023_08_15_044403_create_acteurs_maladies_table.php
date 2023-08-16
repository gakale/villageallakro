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
        Schema::create('acteurs_maladies', function (Blueprint $table) {
            $table->id('id_acteurs_maladies');
            $table->unsignedBigInteger('id_acteur');
            $table->foreign('id_acteur')->references('id_acteur')->on('acteurs');
            $table->unsignedBigInteger('id_maladie');
            $table->foreign('id_maladie')->references('id_maladie')->on('maladies');
            $table->string('statut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acteurs_maladies');
    }
};
