<?php

namespace App\Http\Controllers;
use App\EmployeeProfile;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function view_employees()
    {
        $employees = EmployeeProfile::get();
        return $employees;
    }
    
}
