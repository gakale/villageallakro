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
            $table->id('id_acteurs_centresantes');
            $table->unsignedBigInteger('id_acteur');
            $table->foreign('id_acteur')->references('id_acteur')->on('acteurs');

            $table->unsignedBigInteger('id_centre_sante');
            $table->foreign('id_centre_sante')->references('id_centre_sante')->on('centre_santes')->onDelete('cascade')->onUpdate('cascade');

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
