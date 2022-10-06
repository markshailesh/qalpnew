<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    protected $fillable = ['degree_name', 'degree_desc', 'name','f_name','dob','country', 'state', 'city', 'address', 'area_pin', 'email', 'phone', 'experience', 'created_at', 'updated_at', 'h_college', 'h_year', 'h_percentage', 'i_college', 'i_year', 'i_percentage', 'g_college', 'g_year', 'g_percentage', 'pg_college', 'pg_year', 'pg_percentage', 'higher_degree'
    ];

}
