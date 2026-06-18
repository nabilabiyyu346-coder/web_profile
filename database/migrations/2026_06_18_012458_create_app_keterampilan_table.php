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
        Schema::create('app_keterampilan', function(Blueprint $table) {
            $table->id();
            $table->string('nama_keterampilan', 250);
            $table->integer('nilai');
            $table->integer('flag');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists ('app_keterampilan');
    }
};