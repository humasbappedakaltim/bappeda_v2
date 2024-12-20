<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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


    public function community_satisfaction_survey_respondents(){
        return $this->belongsTo('community_satisfaction_survey_respondent_id','id');
    }
}
