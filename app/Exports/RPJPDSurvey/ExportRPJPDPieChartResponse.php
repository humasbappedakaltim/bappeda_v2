<?php

namespace App\Exports\RPJPDSurvey;

use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Chart\Chart;
use PhpOffice\PhpSpreadsheet\Chart\Title;
use PhpOffice\PhpSpreadsheet\Chart\Legend;
use Maatwebsite\Excel\Concerns\WithCharts;
use PhpOffice\PhpSpreadsheet\Chart\PlotArea;
use PhpOffice\PhpSpreadsheet\Chart\DataSeries;
use PhpOffice\PhpSpreadsheet\Chart\DataSeriesValues;
use PhpOffice\PhpSpreadsheet\Chart\Layout;

class ExportRPJPDPieChartResponse implements WithTitle, WithCharts
{
    /**
     * @return Chart|Chart[]
     */
    public function charts()
    {
        $labels     = [new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_STRING, 'Worksheet!$C$1', null, 4)];
        $categories = [new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_STRING, 'Worksheet!$A$2:$A$5', null)];
        $values     = [new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_NUMBER, 'Worksheet!$C$2:$C$5', null)];
        $layout = new Layout();
        $layout->setShowVal(true);
        $layout->setShowPercent(true);
        $chart1 = new Chart(
            'chart',
            new Title('Test Pie Chart'),
            new Legend(),
            new PlotArea($layout, [
                new DataSeries(DataSeries::TYPE_PIECHART, null, range(0, count($values) - 1), $labels, $categories, $values)
            ])
        );

        $chart1->setTopLeftPosition('A1');
        $chart1->setBottomRightPosition('H20');

        return $chart1;
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return 'Pie chart';
    }
}
