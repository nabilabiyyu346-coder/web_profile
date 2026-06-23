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
        Schema::create('app_section', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('section_name', 150);
            $table->string('compact_data', 150)->nullable();
            $table->integer('order');
            $table->integer('status')->default(1)->comment('0:tidak-aktif;1:aktif');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_section');
    }
};
