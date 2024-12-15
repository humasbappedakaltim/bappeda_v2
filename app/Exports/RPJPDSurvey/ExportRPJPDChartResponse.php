<?php

namespace App\Exports\RPJPDSurvey;

use Maatwebsite\Excel\Concerns\FromCollection;

class ExportRPJPDChartResponse implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect([
            ['', 2010, 2011, 2012],
            ['Q1', 12, 15, 21],
            ['Q2', 56, 73, 86],
            ['Q3', 52, 61, 69],
            ['Q4', 30, 32, 0],
        ]);
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return 'Products';
    }
}
