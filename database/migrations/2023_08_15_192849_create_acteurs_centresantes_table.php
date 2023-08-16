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
            $table->unsignedBigInteger('id_acteur');
            $table->foreignId('acteur_id')->constrained('acteurs');
            $table->unsignedBigInteger('id_centre_sante');
            $table->foreignId('centre_sante_id')->constrained('centres_sante');
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
