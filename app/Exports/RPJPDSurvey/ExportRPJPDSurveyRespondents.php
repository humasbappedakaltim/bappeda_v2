<?php

namespace App\Exports\RPJPDSurvey;

use App\Models\RPJPDSurvey\RPJPDSurveyRespondent;
use Carbon\Carbon;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;

class ExportRPJPDSurveyRespondents implements FromCollection, WithHeadings, WithColumnWidths, WithEvents, WithTitle, WithMapping
{
    public $rowNumber = 1;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RPJPDSurveyRespondent::all();
    }

    public function map($rpjpdSurveyRespondent): array
    {
        return [
            $this->rowNumber++,
            $rpjpdSurveyRespondent->id,
            $rpjpdSurveyRespondent->sex,
            $rpjpdSurveyRespondent->age,
            $rpjpdSurveyRespondent->disability,
            $rpjpdSurveyRespondent->origin,
            $rpjpdSurveyRespondent->education_type,
            $rpjpdSurveyRespondent->job_type,
            $rpjpdSurveyRespondent->phone_number,
            Carbon::parse($rpjpdSurveyRespondent->created_at),
            Carbon::parse($rpjpdSurveyRespondent->updated_at),
        ];
    }

    public function headings(): array
    {
        return ["No", "ID Responden", "Jenis Kelamin", "Usia", "Disabilitas", "Asal", "Jenis Pendidikan", "Jenis Pekerjaan", "Nomor Handphone", "Waktu Buat", "Waktu Ubah",];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 10,
            'B' => 15,            
            'C' => 20,            
            'D' => 10,            
            'E' => 15,            
            'F' => 30,            
            'G' => 30,            
            'H' => 30,            
            'I' => 20,            
            'J' => 20,            
            'K' => 20,            
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $event->sheet->getDelegate()->getStyle('A1:K1')
                        ->getFill()
                        ->setFillType(Fill::FILL_SOLID)
                        ->getStartColor()
                        ->setARGB('DD4B39');
            },
        ];
    }

    public function title(): string
    {
        return 'Responden';
    }
}

