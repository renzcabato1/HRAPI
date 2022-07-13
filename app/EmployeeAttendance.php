<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeAttendance extends Model
{
    //
    protected $connection = 'sqlsrv_hris';
    
    protected $table = 'employee_attendance';
}
