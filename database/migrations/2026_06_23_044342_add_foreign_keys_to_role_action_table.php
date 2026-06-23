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
        Schema::table('role_action', function (Blueprint $table) {
            $table->foreign(['role_id'], 'role_action_ibfk_1')->references(['id'])->on('role')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['action_id'], 'role_action_ibfk_2')->references(['id'])->on('action')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('role_action', function (Blueprint $table) {
            $table->dropForeign('role_action_ibfk_1');
            $table->dropForeign('role_action_ibfk_2');
        });
    }
};
