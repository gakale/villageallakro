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
            $table->id();
            $table->unsignedBigInteger('acteur_id');
            $table->unsignedBigInteger('centreinteret_id');
            $table->foreign('acteur_id')->references('id')->on('acteurs')->onDelete('cascade');
            $table->foreign('centreinteret_id')->references('id')->on('centre_interets')->onDelete('cascade');
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
