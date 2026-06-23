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
        Schema::create('app_membimbing', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nrp', 250);
            $table->string('nama', 250);
            $table->text('judul')->nullable();
            $table->text('abstrak')->nullable();
            $table->year('tahun')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_membimbing');
    }
};
