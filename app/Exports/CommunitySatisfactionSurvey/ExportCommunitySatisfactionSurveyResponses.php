<?php

namespace App\Exports\CommunitySatisfactionSurvey;

use Carbon\Carbon;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use App\Models\CommunitySatisfactionSurvey\CommunitySatisfactionSurveyResponse;
use Illuminate\Support\Collection;

class ExportCommunitySatisfactionSurveyResponses implements FromCollection, WithHeadings, WithColumnWidths, WithEvents, WithTitle, WithMapping
{
    public $rowNumber = 1;
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return CommunitySatisfactionSurveyResponse::all();
    // }

    protected $data;

    public function __construct(Collection $data)
    {
        $this->data = $data;
    }

    public function collection()
    {
        return $this->data;
    }

    public function map($communitySatisfactionSurveyResponse): array
    {
        return [
            $this->rowNumber++,
            $communitySatisfactionSurveyResponse->requirement,
            $communitySatisfactionSurveyResponse->competency,
            $communitySatisfactionSurveyResponse->convenience,
            $communitySatisfactionSurveyResponse->politeness,
            $communitySatisfactionSurveyResponse->velocity,
            $communitySatisfactionSurveyResponse->quality,
            $communitySatisfactionSurveyResponse->reasonableness,
            $communitySatisfactionSurveyResponse->management,
            $communitySatisfactionSurveyResponse->suitability,
            $communitySatisfactionSurveyResponse->advice,
            $communitySatisfactionSurveyResponse->community_satisfaction_survey_respondent_id,
            Carbon::parse($communitySatisfactionSurveyResponse->created_at),
            Carbon::parse($communitySatisfactionSurveyResponse->updated_at),
        ];
    }

    public function headings(): array
    {
        return ["No", "Kesesuaian Persyaratan", "Kompetensi Petugas", "Kemudahan Prosedur", "Kesopanan dan Keramahan", "Kecepatan Waktu", "Kualitas Sarana dan Prasarana", "Kewajaran Biaya", "Penanganan Pengaduan", "Kesesuaian Produk", "Saran", "ID Responden", "Waktu Buat", "Waktu Ubah",];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 10,
            'B' => 20,
            'C' => 20,
            'D' => 20,
            'E' => 20,
            'F' => 20,
            'G' => 20,
            'H' => 20,
            'I' => 20,
            'J' => 20,
            'K' => 20,
            'L' => 20,
            'M' => 20,
            'N' => 20,
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $event->sheet->getDelegate()->getStyle('A1:P1')
                        ->getFill()
                        ->setFillType(Fill::FILL_SOLID)
                        ->getStartColor()
                        ->setARGB('DD4B39');
            },
        ];
    }

    public function title(): string
    {
        return 'Respon';
    }
}
