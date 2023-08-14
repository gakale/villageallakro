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
            $table->id('id_promotion_artisanales');
            $table->string('nom');
            $table->string('description');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->integer('pourcentage');
            $table->string('etat');
            $table->string('photo');
            $table->string('statut');
            $table->unsignedBigInteger('id_artisanales');
            $table->foreign('id_artisanales')->references('id_artisanales')->on('artisanales');
            $table->unsignedBigInteger('id_acteur');
            $table->foreign('id_acteur')->references('id_acteur')->on('acteurs');
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
