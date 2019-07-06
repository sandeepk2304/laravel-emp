<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\IReport;

class ReportController extends Controller
{
    //
    protected $reportService;
    
    public function __construct(IReport $reportService)
    {
        $this->reportService = $reportService;
    }
    /**
     * To get Report data by type
     *
     * @param Request $request
     * @return void
     */
    public function index(Request $request){
        
        $reportType = $request->report;
        
        if(!in_array($reportType,[1,2,3])){
            return redirect('/employees')->with(['status'=>false,'msg'=>'Invalid Report Type!']);
        }

        return view("reports.report_{$reportType}")->with([
            'pageTitle'=>'Repor Type : '.$reportType,
            'employees'=>$this->reportService->getReport($reportType)
        ]);
    }
}
