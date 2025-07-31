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
        Schema::create("materi_paparan_bidangs", function (Blueprint $table) {
            $table->foreignId('materi_paparan_id')->nullable()->references('id')->on('materi_paparans')->onDelete('cascade');
            $table->foreignId('bidang_id')->nullable()->references('id')->on('bidangs')->onDelete('cascade');
            $table->primary(['materi_paparan_id', 'bidang_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('materi_paparan_bidangs');
    }
};
