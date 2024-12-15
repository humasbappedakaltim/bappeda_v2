<?php

namespace App\Exports\RPJPDSurvey;


use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class ExportRPJPDSurveys implements WithMultipleSheets 
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function sheets(): array
    {
        return [
            new ExportRPJPDSurveyRespondents(),
            new ExportRPJPDSurveyHopeResponses(),
            new ExportRPJPDSurveyPriorityResponses(),
            new ExportRPJPDSurveyIssueResponses(),
            new ExportRPJPDSurveyKeywordResponses(),
            new ExportRPJPDSurveySectorResponses(),
            new ExportRPJPDChartResponse(),
            new ExportRPJPDPieChartResponse(),
        ];
    }
}

