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
        Schema::table('blog_post_kategori', function (Blueprint $table) {
            $table->foreign(['id_post'], 'blog_post_kategori_ibfk_1')->references(['id'])->on('blog_post')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_kategori'], 'blog_post_kategori_ibfk_2')->references(['id'])->on('blog_kategori')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blog_post_kategori', function (Blueprint $table) {
            $table->dropForeign('blog_post_kategori_ibfk_1');
            $table->dropForeign('blog_post_kategori_ibfk_2');
        });
    }
};
