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
        Schema::create('demenagements', function (Blueprint $table) {
            $table->id('id_demenagement');
            $table->unsignedBigInteger('id_acteur');
            $table->text('info');
            $table->foreign('id_acteur')->references('id_acteur')->on('acteurs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demenagements_achat');
    }
};
