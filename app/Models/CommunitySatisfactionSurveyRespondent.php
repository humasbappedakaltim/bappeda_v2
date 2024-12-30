<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CommunitySatisfactionSurveyRespondent extends Model
{
    protected $table = 'community_satisfaction_survey_respondent';

    protected $fillable = [
        'name',
        'email',
        'sex',
        'age',
        'phone_number',
        'address',
        'main_job',
    ];


    public function community_satisfaction_survey_responses(): HasMany
    {
        return $this->hasMany(CommunitySatisfactionSurveyResponse::class ,'community_satisfaction_survey_respondent_id','id');
    }
}
