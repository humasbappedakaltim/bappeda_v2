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
        Schema::create('post_news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->integer('views')->default(0);
            $table->foreignUuid('user_id')->nullable()->references('id')->on('users');
            $table->string('user_id_1')->nullable();
            $table->foreignId('category_id')->references('id')->on('post_categories');
            $table->text('keywords')->nullable();
            $table->text('tags')->nullable();
            $table->text('image');
            $table->integer('status')->default(0);
            $table->text('extra_photo')->nullable();
            $table->date('published_at')->nullable();
            $table->string('slug');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_news');
    }
};
