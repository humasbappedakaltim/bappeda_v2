<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RpjmdSurveyRespondent extends Model
{
    protected $guarded = ["id"];

    public function rpjmd_survey_issue_responses()
    {
        return $this->hasMany(RpjmdSurveyIssueResponse::class ,'rpjmd_survey_respondent_id', 'id');
    }

    public function rpjmd_survey_hope_responses()
    {
        return $this->hasOne(RpjmdSurveyHopeResponse::class ,'rpjmd_survey_respondent_id', 'id');
    }
}
