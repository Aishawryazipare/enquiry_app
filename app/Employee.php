<?php

namespace App;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class Employee extends Authenticatable
    {
        use Notifiable;
        
        protected $table = 'tbl_employees';
        protected $guard = 'employee';

        protected $fillable = [
            'name', 'email', 'password','role','android_password','mobile_no','address','is_active','cid','lid','sub_emp_id'
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
    }
