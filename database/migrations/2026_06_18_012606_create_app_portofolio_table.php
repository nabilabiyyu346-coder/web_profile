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
            $table->foreignId('id_kategori')->nullable();
            $table->string('nama', 250);
            $table->string('year', 250)->nullable()->unique();
            $table->string('tag', 250)->nullable()->unique();
            $table->text('kilasan')->nullable();
            $table->string('link', 250)->nullable()->unique();
            $table->string('id_author', 3)->nullable()->unique();
            $table->integer('flag')->nullable()->unique();
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