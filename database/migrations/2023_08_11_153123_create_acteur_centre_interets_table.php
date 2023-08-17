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
        Schema::create('acteur_centre_interets', function (Blueprint $table) {
            $table->unsignedBigInteger('id_acteur');
            $table->unsignedBigInteger('id_centre_interets');
            $table->foreign('id_acteur')->references('id_acteur')->on('acteurs')->onDelete('cascade');
            $table->foreign('id_centre_interets')->references('id_centre_interets')->on('centre_interets')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acteur_centre_interet');
    }
};
