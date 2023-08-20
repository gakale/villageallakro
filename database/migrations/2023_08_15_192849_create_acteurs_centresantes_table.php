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
        Schema::create('acteurs_centresantes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('acteur_id');
            $table->foreign('acteur_id')->references('id')->on('acteurs');

            $table->unsignedBigInteger('id_centre_sante');
            $table->foreign('id_centre_sante')->references('id')->on('centre_santes')->onDelete('cascade')->onUpdate('cascade');

            $table->string('statut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acteurs_centresantes');
    }
};
