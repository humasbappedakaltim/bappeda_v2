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
use App\Models\RPJPDSurvey\RPJPDSurveyKeywordResponse;

class ExportRPJPDSurveyKeywordResponses implements FromCollection, WithHeadings, WithColumnWidths, WithEvents, WithTitle, WithMapping
{
    public $rowNumber = 1;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RPJPDSurveyKeywordResponse::all();
    }

    public function map($rpjpdSurveyKeywordResponses): array
    {
        return [
            $this->rowNumber++,
            $rpjpdSurveyKeywordResponses->keyword,
            $rpjpdSurveyKeywordResponses->rpjpd_survey_respondent_id,
            Carbon::parse($rpjpdSurveyKeywordResponses->created_at),
            Carbon::parse($rpjpdSurveyKeywordResponses->updated_at),
        ];
    }

    public function headings(): array
    {
        return ["No", "Kata Kunci", "ID Responden", "Waktu Buat", "Waktu Ubah",];
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
        return 'Kata Kunci';
    }
}
