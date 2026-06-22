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
        Schema::create('app_portofolio', function(Blueprint $table) {
            $table->id();
            $table->foreignId('id_kategori');
            $table->string('nama', 250);
            $table->string('gambar', 250)->unique();
            $table->string('tag', 250);
            $table->text('kilasan');
            $table->year('start_date', 4);
            $table->year('end_date', 4);
            $table->string('link', 250)->unique();
            $table->string('id_author', 3)->unique();
            $table->integer('flag')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists ('app_portofolio');
    }
};