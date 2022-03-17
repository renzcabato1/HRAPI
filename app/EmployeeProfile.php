<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeProfile extends Model
{
    //
    protected $table = 'employee_profile';
    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];

    public function approver_info()
    {
        return $this->hasOne(EmployeeProfile::class,"badgeno","reporting_to");
    }
}
