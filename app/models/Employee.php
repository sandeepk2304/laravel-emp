<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $table = 'employee';

    /**
     * 
     * @param integer $limit
     * @return void
     */
    public static function findAll(int $limit){
        
        return self :: select(['employee.*','d.name as deptName'])
                    ->leftJoin('department as d','employee.department_id', '=', 'd.id')
                    ->orderBy('employee.id','DESC')
                    ->paginate($limit);
    }
}
