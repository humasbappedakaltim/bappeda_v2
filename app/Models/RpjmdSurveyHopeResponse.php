<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RpjmdSurveyHopeResponse extends Model
{
    protected $guarded = ["id"];

    public function rpjmd_survey_respondents()
    {
        return $this->belongsTo(RpjmdSurveyRespondent::class ,'rpjmd_survey_respondent_id', 'id');
    }
}
