<?php

use App\Models\RpjmdSurveyRespondent;
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
        Schema::create('rpjmd_survey_issue_responses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(RpjmdSurveyRespondent::class);
            $table->string('issue', 64);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rpjmd_survey_issue_responses');
    }
};
