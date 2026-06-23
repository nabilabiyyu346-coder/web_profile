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
        Schema::table('app_lecturer', function (Blueprint $table) {
            $table->foreign(['jurusan_id'], 'app_lecturer_ibfk_1')->references(['id'])->on('app_jurusan')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('app_lecturer', function (Blueprint $table) {
            $table->dropForeign('app_lecturer_ibfk_1');
        });
    }
};
