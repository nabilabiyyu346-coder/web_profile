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
            $table->id();
            $table->string('name', 50);
            $table->string('username', 50);
            $table->string('email', 150)->unique();
            $table->string('phone', 50);
            $table->string('password', 150);
            $table->string('photo_url', 255)->unique();
            $table->foreignId('role_id');
            $table->string('secret_token', 400)->unique();
            $table->string('fcm_token', 200)->unique();
            $table->rememberToken();
            $table->datetime('last_login');
            $table->datetime('last_logout');
            $table->datetime('registered_at');
            $table->timestamps();
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
