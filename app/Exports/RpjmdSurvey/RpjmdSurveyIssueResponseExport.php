<?php

namespace App\Exports\RpjmdSurvey;

use App\Models\RpjmdSurveyIssueResponse;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class RpjmdSurveyIssueResponseExport implements FromCollection, WithHeadings, WithColumnWidths, WithEvents, WithTitle, WithMapping
{
    public $rowNumber = 1;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RpjmdSurveyIssueResponse::all();
    }

    public function map($rpjmdSurveyIssueResponse): array
    {
        return [
            $this->rowNumber++,
            $rpjmdSurveyIssueResponse->issue,
            $rpjmdSurveyIssueResponse->rpjmd_survey_respondent_id,
            Carbon::parse($rpjmdSurveyIssueResponse->created_at),
            Carbon::parse($rpjmdSurveyIssueResponse->updated_at),
        ];
    }

    public function headings(): array
    {
        return ["No", "Isu atau Permasalahan", "ID Responden", "Waktu Buat", "Waktu Ubah",];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 10,
            'B' => 40,
            'C' => 15,
            'D' => 25,
            'E' => 25,
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $event->sheet->getDelegate()->getStyle('A1:E1')
                        ->getFill()
                        ->setFillType(Fill::FILL_SOLID)
                        ->getStartColor()
                        ->setARGB('FFB536');
            },
        ];
    }

    public function title(): string
    {
        return 'Isu atau Permasalahan';
    }
}
