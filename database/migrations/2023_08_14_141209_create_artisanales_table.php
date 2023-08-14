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
        Schema::create('artisanales', function (Blueprint $table) {
            $table->id('id_artisanales');
            $table->string('nom');
            $table->string('description');
            $table->integer('prix');
            $table->string('categorie');
            $table->string('collection');
            $table->string('etat');
            $table->string('photo');
            $table->string('statut');
            $table->unsignedBigInteger('id_acteur');
            $table->foreign('id_acteur')->references('id_acteur')->on('acteurs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artisanales');
    }
};
