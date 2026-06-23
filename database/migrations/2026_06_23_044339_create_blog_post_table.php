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
        Schema::create('blog_post', function (Blueprint $table) {
            $table->string('id', 36)->primary();
            $table->string('slug', 150);
            $table->string('image', 150);
            $table->string('title', 250);
            $table->text('tag');
            $table->text('kilasan');
            $table->longText('content');
            $table->integer('view_count')->default(0);
            $table->string('id_author', 36)->index('id_author');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->integer('flag')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_post');
    }
};
