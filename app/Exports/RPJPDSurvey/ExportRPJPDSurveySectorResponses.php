<?php

namespace App\Exports\RPJPDSurvey;

use App\Models\RPJPDSurvey\RPJPDSurveySectorResponse;
use Carbon\Carbon;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCharts;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use PhpOffice\PhpSpreadsheet\Chart\Chart;
use PhpOffice\PhpSpreadsheet\Chart\DataSeries;
use PhpOffice\PhpSpreadsheet\Chart\DataSeriesValues;
use PhpOffice\PhpSpreadsheet\Chart\Legend;
use PhpOffice\PhpSpreadsheet\Chart\PlotArea;
use PhpOffice\PhpSpreadsheet\Chart\Title;

class ExportRPJPDSurveySectorResponses implements FromCollection, WithHeadings, WithColumnWidths, WithEvents, WithTitle, WithMapping, WithCharts
{
    public $rowNumber = 1;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RPJPDSurveySectorResponse::all();
    }

    public function map($rpjpdSurveySectorResponses): array
    {
        return [
            $this->rowNumber++,
            $rpjpdSurveySectorResponses->sector,
            $rpjpdSurveySectorResponses->rpjpd_survey_respondent_id,
            Carbon::parse($rpjpdSurveySectorResponses->created_at),
            Carbon::parse($rpjpdSurveySectorResponses->updated_at),
        ];
    }

    public function headings(): array
    {
        return ["No", "Sektor", "ID Responden", "Waktu Buat", "Waktu Ubah",];
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

    public function charts()
    {
        $label      = [new DataSeriesValues('String', 'Worksheet!$A$1', null, 1)];
        $categories = [new DataSeriesValues('String', 'Worksheet!$A$1', null, 4)];
        $values     = [new DataSeriesValues('String', 'Worksheet!$A$2:$A$5', null, 4)];

        $series = new DataSeries(DataSeries::TYPE_PIECHART, DataSeries::GROUPING_STANDARD,
            range(0, \count($values) - 1), $label, $categories, $values);
        $plot   = new PlotArea(null, [$series]);

        $legend = new Legend();
        $chart  = new Chart('chart name', new Title('Sektor Ekonomi yang Paling Potensial Dikembangkan dalam 20 Tahun Kedepan'), $legend, $plot);

        return $chart;
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
        return 'Sektor';
    }
}
