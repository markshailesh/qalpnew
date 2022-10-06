<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudEnquiry extends Model
{
       protected $fillable = ['class_mode', 'class', 'subject', 'language', 'fee_range', 'massage', ];
}
