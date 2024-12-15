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
use App\Models\CommunitySatisfactionSurvey\CommunitySatisfactionSurveyRespondent;
use Illuminate\Support\Collection;

class ExportCommunitySatisfactionSurveyRespondents implements FromCollection, WithHeadings, WithColumnWidths, WithEvents, WithTitle, WithMapping
{
    public $rowNumber = 1;
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return CommunitySatisfactionSurveyRespondent::all();
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

    public function map($communitySatisfactionSurveyRespondent): array
    {
        return [
            $this->rowNumber++,
            $communitySatisfactionSurveyRespondent->id,
            $communitySatisfactionSurveyRespondent->name,
            $communitySatisfactionSurveyRespondent->email,
            $communitySatisfactionSurveyRespondent->sex,
            $communitySatisfactionSurveyRespondent->age,
            $communitySatisfactionSurveyRespondent->phone_number,
            $communitySatisfactionSurveyRespondent->address,
            $communitySatisfactionSurveyRespondent->main_job,
            Carbon::parse($communitySatisfactionSurveyRespondent->created_at),
            Carbon::parse($communitySatisfactionSurveyRespondent->updated_at),
        ];
    }

    public function headings(): array
    {
        return ["No", "ID Responden", "Nama", "Email", "Jenis Kelamin", "Usia", "Nomor Handphone", "Alamat", "Pekerjaan Utama", "Waktu Buat", "Waktu Ubah",];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 10,
            'B' => 15,
            'C' => 20,
            'D' => 20,
            'E' => 15,
            'F' => 20,
            'G' => 20,
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
