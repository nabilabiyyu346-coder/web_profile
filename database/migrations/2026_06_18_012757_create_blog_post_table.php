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
        Schema::create('blog_post', function(Blueprint $table) {
            $table->id(36);
            $table->string('slug', 150);
            $table->string('image', 150)->unique();
            $table->string('title', 250);
            $table->text('tag');
            $table->text('kilasan');
            $table->longText('content');
            $table->integer('view_count');
            $table->foreignId('id_author');
            $table->timestamps();
            $table->integer('flag');
            $table->foreignId('id_kategori')->constrained('blog_kategori')->onDelete('cascade');
            $table->timestamp('published_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists ('blog_post');
    }
};