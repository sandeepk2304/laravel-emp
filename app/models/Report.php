<?php

namespace App\models;
use Illuminate\Support\Facades\DB;

class Report extends Employee
{
    static $fields = [
        'employee.id',
        'employee.name',
        'd.name as deptName'
    ];
    /**
     * To find report
     *
     * @param integer $type
     * @return void
     */
    public static function findReportByType(int $type){
        
        if($type == 1){
            self::$fields[] = DB::raw('MAX(salary) AS salary');
            $query =  self :: select(self::$fields)
            ->join('department as d','employee.department_id', '=', 'd.id')
            ->groupBy('employee.department_id');
        }

        if($type == 2){
            $query =  self :: select(self::$fields)
                     ->leftJoin('department as d','employee.department_id', '=', 'd.id')
                     ->whereNull('employee.department_id');
        }

        if($type == 3){
            return $query = collect(DB::select(
                    "
                    SELECT
                        `employee`.`id`,
                        `employee`.`name`, 
                        `d`.`name` as `deptName`, 
                        DATE_FORMAT( FROM_DAYS( DATEDIFF(CURRENT_DATE, employee.dob) ), '%y Years %m Months %d Days' ) AS age 
                        FROM `employee`  left join `department` as `d` on `employee`.`department_id` = `d`.`id`, 
                        ( SELECT department_id, MAX(dob) as dob from employee group by department_id ) as e1
                        where `employee`.`department_id` = e1.department_id and `employee`.`dob` = e1.dob order by `employee`.`id` desc
                    "
            ));
        }

        return $query
               ->orderBy('employee.id','DESC')
               ->get();
    }
}
