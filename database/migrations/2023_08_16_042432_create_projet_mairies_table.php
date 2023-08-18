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
        Schema::create('projet_mairies', function (Blueprint $table) {
            $table->id();
            $table->string('projet');
            $table->string('description');
            $table->string('image');
            $table->string('video');
            $table->unsignedBigInteger('id_mairie');
            $table->foreign('id_mairie')->references('id')->on('mairies')->onDelete('cascade');
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
        Schema::dropIfExists('projets_mairies');
    }
};
