<?php

namespace App\Http\Controllers\API;
use App\Company;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use Validator;

class CompanyController extends BaseController
{
    //

    public function index()
    {
        $companies = Company::get();
        return $this->sendResponse($companies->toArray(), 'Companies retrieved successfully.');
    }
}
