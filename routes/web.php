<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('get-employees-all',"EmployeeController@view_employees");

Auth::routes();

Route::middleware('auth:api')->group( function () {
	Route::resource('employees', 'API\EmployeeController');
    Route::resource('companies', 'API\CompanyController');
    Route::resource('departments', 'API\DepartmentController');
    Route::resource('getAttendance', 'API\AttendanceController');
});
