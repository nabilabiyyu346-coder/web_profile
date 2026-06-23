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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('username', 50)->nullable()->unique();
            $table->string('email', 150)->unique();
            $table->string('phone', 50)->nullable()->unique();
            $table->string('password', 150);
            $table->string('photo_url', 255)->nullable()->unique();
            $table->foreignId('role_id')->nullable();
            $table->string('secret_token', 400)->nullable()->unique();
            $table->string('fcm_token', 200)->nullable()->unique();
            $table->rememberToken()->nullable();
            $table->datetime('last_login')->nullable();
            $table->datetime('last_logout')->nullable();
            $table->datetime('registered_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
