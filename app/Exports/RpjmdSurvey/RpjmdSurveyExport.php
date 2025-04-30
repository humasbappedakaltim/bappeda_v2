<?php

namespace App\Exports\RpjmdSurvey;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class RpjmdSurveyExport implements WithMultipleSheets
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function sheets(): array
    {
        return [
            new RpjmdSurveyRespondentExport(),
            new RpjmdSurveyIssueResponseExport(),
            new RpjmdSurveyHopeResponseExport(),
        ];
    }
}
