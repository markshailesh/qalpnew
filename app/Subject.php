<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'course_id','name', 'image', 'status'
    ];
    
    public function course(){

        return $this->belongsTo(Course::class, 'course_id');

    }
}
