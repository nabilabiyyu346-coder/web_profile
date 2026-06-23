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
        Schema::create('app_experience', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 250);
            $table->text('description');
            $table->integer('start_year');
            $table->integer('end_year')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_experience');
    }
};
