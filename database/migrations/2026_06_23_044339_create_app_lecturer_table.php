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
        Schema::create('app_lecturer', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('mata_kuliah', 250);
            $table->integer('jurusan_id')->nullable()->index('jurusan_id');
            $table->year('tahun')->nullable();
            $table->integer('flag')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_lecturer');
    }
};
