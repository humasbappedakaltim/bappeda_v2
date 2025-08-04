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
        Schema::create('data_centers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('file');
            $table->string('cover')->nullable();
            // refrences not uuid
            $table->foreignid('category_data_center_id')->references('id')->on('category_data_centers')->onDelete('cascade');
            $table->integer('order')->nullable();
            $table->string('category_information')->nullable();
            $table->string('penanggung_jawab')->nullable();
            $table->string('waktu_tempat_pembuatan')->nullable();
            $table->string('bentuk_informasi')->nullable();
            $table->boolean('wajib_berkala')->default(false);
            $table->boolean('wajib_serta_merta')->default(false);
            $table->boolean('wajib_disediakan')->default(false);
            $table->boolean('di_kecualikan')->default(false);
            $table->string('jangka_waktu')->nullable();
            $table->string('slug');
            $table->timestamps();
        });
    }

    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_centers');
    }
};
