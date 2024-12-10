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
        Schema::create('app_bappedas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('link');
            $table->string('foto');
            $table->text('description')->nullable();
            $table->boolean('status')->default(1);
            $table->integer('orders')->nullable();
            $table->boolean('active')->default(1);
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
        Schema::dropIfExists('app_bappedas');
    }
};
