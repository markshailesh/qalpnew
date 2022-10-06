<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name', 'phone_number','image','dob','courses','status','paid','student_session','email','alt_phn','address','gender','fcm_token'
    ];
}
