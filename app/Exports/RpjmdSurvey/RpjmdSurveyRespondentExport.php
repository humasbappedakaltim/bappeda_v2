<?php

namespace App\Exports\RpjmdSurvey;

use App\Models\RpjmdSurveyRespondent;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithTitle;

class RpjmdSurveyRespondentExport implements FromCollection, WithHeadings, WithColumnWidths, WithEvents, WithTitle, WithMapping
{
    public $rowNumber = 1;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RpjmdSurveyRespondent::all();
    }

    public function map($rpjmdSurveyRespondent): array
    {
        return [
            $this->rowNumber++,
            $rpjmdSurveyRespondent->id,
            $rpjmdSurveyRespondent->sex,
            $rpjmdSurveyRespondent->age,
            $rpjmdSurveyRespondent->domicile,
            $rpjmdSurveyRespondent->main_job,
            $rpjmdSurveyRespondent->disability,
            $rpjmdSurveyRespondent->last_education,
            $rpjmdSurveyRespondent->phone_number,
            Carbon::parse($rpjmdSurveyRespondent->created_at),
            Carbon::parse($rpjmdSurveyRespondent->updated_at),
        ];
    }

    public function headings(): array
    {
        return ["No", "ID Responden", "Jenis Kelamin", "Usia", "Asal Responden", "Jenis Pekerjaan", "Penyandang Disabilitas", "Pendidikan Terakhir", "Nomor Handphone", "Waktu Buat", "Waktu Ubah",];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 10,
            'B' => 15,
            'C' => 30,
            'D' => 30,
            'E' => 30,
            'F' => 30,
            'G' => 15,
            'H' => 30,
            'I' => 30,
            'J' => 25,
            'K' => 25,
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
                        ->setARGB('FFB536');
            },
        ];
    }

    public function title(): string
    {
        return 'Responden';
    }
}
