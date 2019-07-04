<?php

namespace App\Repositories;

use App\models\Employee;

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
}