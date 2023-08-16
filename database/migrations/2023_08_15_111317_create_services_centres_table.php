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
        Schema::create('services_centres', function (Blueprint $table) {
            $table->id('id_service_centre');
            $table->unsignedBigInteger('id_centre_sante');
            $table->foreign('id_centre_sante')->references('id_centre_sante')->on('centres_sante');
            $table->unsignedBigInteger('id_service_sante');
            $table->foreign('id_service_sante')->references('id_service_sante')->on('services_sante');
            $table->string('nom');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_centres');
    }
};
