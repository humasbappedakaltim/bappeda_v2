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
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->timestamp('schedule')->useCurrent()->useCurrentOnUpdate();
            $table->string('caption', 512);
            $table->text('description')->nullable();
            $table->string('location', 255);
            $table->integer('views')->nullable();
            $table->string('image', 100)->nullable();
            $table->string('times', 191)->nullable();
            $table->longText('dihadiri')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendas');
    }
};
