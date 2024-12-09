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
        Schema::create('pejabats', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('foto')->nullable();
            $table->string('nip');
            $table->string('golongan');
            $table->string('kelas_jabatan');
            $table->string('jabatan');
            $table->string('jabatan_lainnya')->nullable();
            $table->string('jabatan_lainnya2')->nullable();
            $table->foreignUuid('bidang_id')->references('id')->on('bidangs');
            $table->foreignUuid('sub_bidang_id')->nullable()->references('id')->on('sub_bidangs');
            $table->string('status_jabatan');
            $table->string('status_jabatan_penjabat');
            $table->string('ketua_tim')->nullable();
            $table->integer('urutan_jabatan');
            $table->string('status_kehadiran');
            $table->boolean('status_aktif')->default(1);
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
        Schema::dropIfExists('pejabats');
    }
};
