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
        Schema::table('reservations', function (Blueprint $table) {
            $table->unsignedBigInteger('chauffeur_id')->nullable();
            $table->foreign('chauffeur_id')->references('id')->on('chauffeurs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->unsignedBigInteger('chauffeur_id')->nullable();
            $table->foreign('chauffeur_id')->references('id')->on('chauffeurs')->onDelete('cascade');
        });
    }
};
