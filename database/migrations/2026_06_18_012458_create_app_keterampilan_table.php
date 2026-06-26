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
            $table->string('soft_skill', 250);
            $table->string('hard_skill', 250);
            $table->string('bahasa', 250);
            $table->integer('flag');
            $table->timestamps();
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