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
        Schema::create('rpjmd_survey_respondents', function (Blueprint $table) {
            $table->id();
            $table->string('sex');
            $table->string('age');
            $table->string('domicile');
            $table->string('main_job');
            $table->string('disability');
            $table->string('last_education');
            $table->string('phone_number', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rpjmd_survey_respondents');
    }
};
