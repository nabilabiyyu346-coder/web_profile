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
        Schema::create('menu', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 50);
            $table->string('controller', 50)->index('controller');
            $table->string('module', 150);
            $table->string('action', 50)->default('index')->index('action');
            $table->string('icon', 50);
            $table->integer('order')->default(1);
            $table->integer('parent_id')->nullable()->index('parent_id');
            $table->text('except')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu');
    }
};
