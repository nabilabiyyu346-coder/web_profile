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
        Schema::create('user', function (Blueprint $table) {
            $table->string('id', 36)->primary();
            $table->string('username', 50)->unique('username');
            $table->string('password', 150);
            $table->string('name', 50);
            $table->string('email', 150)->nullable();
            $table->string('phone', 50)->nullable();
            $table->integer('role_id')->index('role_id');
            $table->string('secret_token', 400)->nullable();
            $table->string('fcm_token', 200)->nullable();
            $table->string('photo_url')->nullable();
            $table->dateTime('last_login')->nullable();
            $table->dateTime('last_logout')->nullable();
            $table->dateTime('registered_at')->nullable();
            $table->integer('flag')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
