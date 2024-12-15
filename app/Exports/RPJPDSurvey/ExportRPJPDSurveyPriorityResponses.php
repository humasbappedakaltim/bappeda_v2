<?php

namespace App\Exports\RPJPDSurvey;

use Carbon\Carbon;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use App\Models\RPJPDSurvey\RPJPDSurveyPriorityResponse;

class ExportRPJPDSurveyPriorityResponses implements FromCollection, WithTitle, WithHeadings, WithColumnWidths, WithEvents, WithMapping
{
    public $rowNumber = 1;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RPJPDSurveyPriorityResponse::all();
    }

    public function map($rpjpdSurveyPriorityResponses): array
    {
        return [
            $this->rowNumber++,
            $rpjpdSurveyPriorityResponses->priority,
            $rpjpdSurveyPriorityResponses->rpjpd_survey_respondent_id,
            Carbon::parse($rpjpdSurveyPriorityResponses->created_at),
            Carbon::parse($rpjpdSurveyPriorityResponses->updated_at),
        ];
    }

    public function headings(): array
    {
        return ["No", "Prioritas", "ID Responden", "Waktu Buat", "Waktu Ubah",];
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
        return 'Prioritas';
    }
}
