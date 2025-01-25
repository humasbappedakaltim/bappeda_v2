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
        Schema::create('pejabat_sub_bidang', function (Blueprint $table) {
            $table->foreignId('pejabat_id')->references('id')->on('pejabats')->onDelete('cascade');
            $table->foreignId('sub_bidang_id')->references('id')->on('sub_bidangs')->onDelete('cascade');
            $table->primary(['pejabat_id', 'sub_bidang_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pejabat_sub_bidang');
    }
};
