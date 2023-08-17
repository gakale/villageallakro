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
        Schema::create('actualites', function (Blueprint $table) {
            $table->id('id_actualites');
            $table->string('titre');
            $table->string('contenu');
            $table->string('image');
            $table->string('statut');
            $table->date('date_publication');
            $table->string('categorie');
            $table->unsignedBigInteger('id_acteur');
            $table->foreign('id')->references('id_acteur')->on('acteurs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actualites');
    }
};
