<?php

namespace App\Repositories;

use App\models\Employee;
use Illuminate\Http\Request;
use App\models\Department;

class EmployeeRepository implements IEmployee
{
    /**
     * To get employee by id
     *
     * @param integer $id
     * @return void
     */
    public function getById(int $id)
    {
        return Employee::find($id);
    }

    /**
     * To get All Employee Records
     *
     * @return void
     */
    public function all(int $limit=10)
    {
        return Employee::findAll( $limit );
    }

    /**
     * Deletes employee
     *
     * @param int
     */
    public function delete(int $id)
    {
        Employee::destroy($id);
    }

    /**
     * Updates a employee.
     *
     * @param int
     * @param array
     */
    public function update(Request $request, int $id)
    {
        $model = Employee::find($id);
        $model->name = $request->name;
        $model->department_id = $request->department_id;
        $model->dob = date('Y-m-d');
        $model->phone = $request->phone;
        $model->email =  $request->email;
        $model->salary = $request->salary;
        $model->status = 1;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $model->photo = $name;
        }
        $model->save();
    }

    /**
     * create a employee.
     *
     * @param int
     * @param array
     */
    public function create(Request $request)
    {
        $model = new Employee();
        $model->name = $request->name;
        $model->department_id = $request->department_id;
        $model->dob = date('Y-m-d');
        $model->phone = $request->phone;
        $model->email =  $request->email;
        $model->salary = $request->salary;
        $model->status = 1;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $model->photo = $name;
        }
        $model->save();
    }

    public function getDepartments()
    {
        return Department::active()->get();
    }
}