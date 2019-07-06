<?php

namespace App\Repositories\Interfaces;

interface IReport
{
    /**
     * To get report by types
     *
     * @param integer $type
     * @return void
     */
    public function getReport(int $type);
}