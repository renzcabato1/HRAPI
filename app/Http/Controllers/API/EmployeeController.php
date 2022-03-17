<?php

namespace App\Http\Controllers\API;
use App\EmployeeProfile;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use Validator;
class EmployeeController extends BaseController
{
    //
    public function index()
    {
        $employees = EmployeeProfile::with('approver_info')->get();
        return $this->sendResponse($employees->toArray(), 'Employees retrieved successfully.');
    }
}
