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
        Schema::create('web_config', function(Blueprint $table) {
            $table->id();
            $table->foreignId('group_id');
            $table->string('name', 200);
            $table->text('value');
            $table->text('default');
            $table->tinyInteger('active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists ('web_config');
    }
};