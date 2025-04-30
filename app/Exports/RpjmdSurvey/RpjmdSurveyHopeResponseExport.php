<?php

namespace App\Exports\RpjmdSurvey;

use App\Models\RpjmdSurveyHopeResponse;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class RpjmdSurveyHopeResponseExport implements FromCollection, WithHeadings, WithColumnWidths, WithEvents, WithTitle, WithMapping
{
    public $rowNumber = 1;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RpjmdSurveyHopeResponse::all();
    }

    public function map($rpjmdSurveyHopeResponse): array
    {
        return [
            $this->rowNumber++,
            $rpjmdSurveyHopeResponse->hope_development,
            $rpjmdSurveyHopeResponse->hope_program,
            $rpjmdSurveyHopeResponse->rpjmd_survey_respondent_id,
            Carbon::parse($rpjmdSurveyHopeResponse->created_at),
            Carbon::parse($rpjmdSurveyHopeResponse->updated_at),
        ];
    }

    public function headings(): array
    {
        return ["No", "Harapan Pembangunan", "Harapan Program", "ID Responden", "Waktu Buat", "Waktu Ubah",];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 10,
            'B' => 40,
            'C' => 40,
            'D' => 15,
            'E' => 25,
            'F' => 25,
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $event->sheet->getDelegate()->getStyle('A1:F1')
                        ->getFill()
                        ->setFillType(Fill::FILL_SOLID)
                        ->getStartColor()
                        ->setARGB('FFB536');
            },
        ];
    }

    public function title(): string
    {
        return 'Harapan';
    }
}
