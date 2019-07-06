<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\IEmployee;
use App\Http\Requests\StoreEmployee;

class EmployeeController extends Controller
{
    protected $employeeService;

    public function __construct(IEmployee $employeeService)
    {
        $this->employeeService = $employeeService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $limit = 5;
        return view('employee.index')->with([
            'pageTitle'=>'List',
            'employees'=>$this->employeeService->all($limit)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create')->with(
            [
                'pageTitle'=>'Add Record',
                'employee'=>null,
                'departments' => $this->employeeService->getDepartments()
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployee $request)
    {
        $this->employeeService->create($request);
        return redirect('/employees')->with(['status'=>true,'msg'=>'Record saved!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('employee.update')->with([
            'pageTitle'=>'Edit',
            'employee'=>$this->employeeService->getById($id),
            'departments' => $this->employeeService->getDepartments()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEmployee $request, $id)
    {
        //
        $this->employeeService->update($request, $id);
        return redirect('/employees')->with(['status'=>true,'msg'=>'Record updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $this->employeeService->delete($id);
        return redirect('/employees')->with(['status'=>true,'msg'=>'Record Deleted!']);
    }
}
