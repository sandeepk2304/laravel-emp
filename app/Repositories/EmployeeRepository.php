<?php

namespace App\Repositories;

use App\models\Employee;
use Illuminate\Http\Request;

class EmployeeRepository implements IEmployee
{
    /**
     * To get employee by id
     *
     * @param integer $id
     * @return void
     */
    public function get(int $id)
    {
        return Employee::find($id);
    }

    /**
     * To get All Employee Records
     *
     * @return void
     */
    public function all()
    {
        return Employee::all();
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
    public function update($id, array $data)
    {
        Employee::find($id)->update($data);
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
        $model->department_id = 1;
        $model->dob = date('Y-m-d');
        $model->phone = 3232;
        $model->photo = 'test';
        $model->email =  $request->email;
        $model->salary = 121212;
        $model->status = 1;
        $model->save();
    }
}