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
        Schema::create('app_lecturer', function(Blueprint $table) {
            $table->id();
            $table->string('mata_kuliah', 250);
            $table->foreignId('jurusan_id')->constrained('app_jurusan')->onDelete('cascade');
            $table->year('tahun', 4);
            $table->integer('flag');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists ('app_lecturer');
    }
};