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
        Schema::create('community_satisfaction_survey_responses', function (Blueprint $table) {
            $table->id();
            $table->string('requirement');
            $table->string('competency');
            $table->string('convenience');
            $table->string('politeness');
            $table->string('velocity');
            $table->string('quality');
            $table->string('reasonableness');
            $table->string('management');
            $table->string('suitability');
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
        Schema::dropIfExists('community_satisfaction_survey_responses');
    }
};
