<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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


    public function community_satisfaction_survey_responses(){
        return $this->hasMany('community_satisfaction_survey_respondent_id','id');
    }
}
