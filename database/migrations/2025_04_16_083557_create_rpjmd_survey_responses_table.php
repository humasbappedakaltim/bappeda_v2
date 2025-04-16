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
        Schema::create('rpjmd_survey_responses', function (Blueprint $table) {
            $table->id();
            $table->string('requirement');
            $table->string('competency');
            $table->string('convenience');
            $table->text('advice');
            $table->unsignedInteger('community_satisfaction_survey_respondent_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rpjmd_survey_responses');
    }
};
