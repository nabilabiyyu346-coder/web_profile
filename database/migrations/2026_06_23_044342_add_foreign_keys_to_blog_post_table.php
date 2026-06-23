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
        Schema::table('blog_post', function (Blueprint $table) {
            $table->foreign(['id_author'], 'blog_post_ibfk_1')->references(['id'])->on('user')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blog_post', function (Blueprint $table) {
            $table->dropForeign('blog_post_ibfk_1');
        });
    }
};
