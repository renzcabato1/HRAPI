<?php

namespace App\Http\Controllers\API;

use App\Department;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use Validator;

class DepartmentController extends BaseController
{
    //
    public function index()
    {
        $departments = Department::get();
        return $this->sendResponse($departments->toArray(), 'Companies retrieved successfully.');
    }
}
