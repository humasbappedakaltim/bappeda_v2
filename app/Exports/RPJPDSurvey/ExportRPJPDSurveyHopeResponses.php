<?php

namespace App\Exports\RPJPDSurvey;

use App\Models\RPJPDSurvey\RPJPDSurveyHopeResponse;
use Carbon\Carbon;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;

class ExportRPJPDSurveyHopeResponses implements FromCollection, WithHeadings, WithColumnWidths, WithEvents, WithTitle, WithMapping
{
    public $rowNumber = 1;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RPJPDSurveyHopeResponse::all();
    }

    public function map($rpjpdSurveyHopeResponses): array
    {
        return [
            $this->rowNumber++,
            $rpjpdSurveyHopeResponses->hope,
            $rpjpdSurveyHopeResponses->rpjpd_survey_respondent_id,
            Carbon::parse($rpjpdSurveyHopeResponses->created_at),
            Carbon::parse($rpjpdSurveyHopeResponses->updated_at),
        ];
    }

    public function headings(): array
    {
        return ["No", "Harapan", "ID Responden", "Waktu Dibuat", "Waktu Diubah",];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 10,
            'B' => 40,            
            'C' => 10,          
            'D' => 20,          
            'E' => 20,          
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
                        ->setARGB('DD4B39');
            },
        ];
    }

    public function title(): string
    {
        return 'Harapan';
    }
}
