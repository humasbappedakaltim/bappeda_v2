<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CommunitySatisfactionSurveyResponse extends Model
{
    protected $table = 'community_satisfaction_survey_responses';

    protected $fillable = [
        'requirement',
        'competency',
        'convenience',
        'politeness',
        'velocity',
        'quality',
        'reasonableness',
        'management',
        'suitability',
        'advice',
        'community_satisfaction_survey_respondent_id',
    ];


    public function community_satisfaction_survey_respondents(): BelongsTo
    {
        return $this->belongsTo(CommunitySatisfactionSurveyRespondent::class, 'community_satisfaction_survey_respondent_id','id');
    }
}
