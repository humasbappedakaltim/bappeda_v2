<?php

namespace App\Exports\CommunitySatisfactionSurvey;


use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class ExportCommunitySatisfactionSurveys implements WithMultipleSheets
{
    protected $respondents;
    protected $responses;

    public function __construct(array $data)
    {
        $this->respondents = $data['respondents'];
        $this->responses = $data['responses'];
    }

    public function sheets(): array
    {
        return [
            new ExportCommunitySatisfactionSurveyRespondents(collect($this->respondents)),
            new ExportCommunitySatisfactionSurveyResponses(collect($this->responses)),
        ];
    }
}
