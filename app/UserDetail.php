<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
         protected $fillable = [
        'user_id','profile_img','name','dob','gender','country','state','district','pincode','full_address','phone_number','second_phone','whatsapp_no','email','audhar_img','audhar_no','specilization','result_document','document_file','passing_year','marks','document_name','doc_img'
    ];

    

}
