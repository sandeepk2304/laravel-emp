<?php

namespace App\Repositories;
use App\Repositories\Interfaces\IReport;
use App\models\Report;

class ReportRepository implements IReport
{
    /**
     * To get Report
     *
     * @param integer $type
     * @return void
     */    
    public function getReport(int $type)
    {
        return Report::findReportByType($type);
    }
}