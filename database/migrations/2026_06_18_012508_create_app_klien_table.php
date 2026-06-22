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
        Schema::create('app_klien', function(Blueprint $table) {
            $table->id();
            $table->string('nama_klien', 250);
            $table->string('gambar', 250)->unique();
            $table->string('link', 250)->unique();
            $table->integer('flag');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists ('app_klien');
    }
};