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
        Schema::table('web_config', function (Blueprint $table) {
            $table->foreign(['group_id'], 'web_config_ibfk_1')->references(['id'])->on('web_config_group')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('web_config', function (Blueprint $table) {
            $table->dropForeign('web_config_ibfk_1');
        });
    }
};
