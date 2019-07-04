<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\IEmployee;

class EmployeeController extends Controller
{
    //
    protected $employeeService;

    public function __construct(IEmployee $employeeService)
    {
        $this->employeeService = $employeeService;
    }
    public function index(){
      //  echo $this->employeeService->get(1);
        return view('employee/index')->with([
            'pageTitle'=>'List'
        ]);
    }
}
