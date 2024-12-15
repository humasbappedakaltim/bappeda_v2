<?php

namespace App\Exports\CommunitySatisfactionSurvey;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class ExportCommunitySatisfactionSurveys implements WithMultipleSheets
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $data;

    public function __construct(Collection $data)
    {
        $this->data = $data;
    }

    public function sheets(): array
    {
        return [
            new ExportCommunitySatisfactionSurveyRespondents($this->data),
            new ExportCommunitySatisfactionSurveyResponses($this->data),
        ];
    }
}
