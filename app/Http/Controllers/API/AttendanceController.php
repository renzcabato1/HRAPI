<?php

namespace App\Http\Controllers\API;
use App\EmployeeAttendance;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;


class AttendanceController extends BaseController
{
    //
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'emp_code' => 'required',
        ]);

        $attendanceToday = EmployeeAttendance::where('emp_code','=','22001018')->first();
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        $data = $request->all();
        return $this->sendResponse($attendanceToday, 'Attendance retrieved successfully.');
    }
}
