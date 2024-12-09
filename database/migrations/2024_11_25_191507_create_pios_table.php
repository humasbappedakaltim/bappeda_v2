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
        Schema::create('pios', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('nik');
            $table->string('ktp');
            $table->string('email');
            $table->string('jenis');
            $table->string('akta_kelahiran');
            $table->string('telp');
            $table->string('faksimili')->nullable();
            $table->text('alamat');
            $table->text('rincian');
            $table->text('tujuan_penggunaan');
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('pios');
    }
};
