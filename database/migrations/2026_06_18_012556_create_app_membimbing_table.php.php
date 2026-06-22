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
        Schema::create('app_membimbing', function(Blueprint $table) {
            $table->id();
            $table->string('nrp', 250)->unique();
            $table->string('nama',250);
            $table->text('judul');
            $table->text('abstrak');
            $table->year('tahun', 4);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists ('app_membimbing');
    }
};