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
        Schema::create('app_portofolio', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_kategori');
            $table->string('gambar', 250);
            $table->string('nama', 250);
            $table->string('tag', 250);
            $table->text('kilasan');
            $table->year('start_date');
            $table->year('end_date')->nullable();
            $table->string('link', 250)->nullable();
            $table->string('id_author', 36)->index('id_author');
            $table->integer('flag')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_portofolio');
    }
};
