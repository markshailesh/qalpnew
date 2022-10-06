<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question_bank extends Model
{
    protected $fillable = [
        'course_id', 'subject_id','question','question_image','option_a','option_b','option_c','option_d','correct_option','answer_explanation','status','option_a_image','option_b_image','option_c_image','option_d_image','answer_explanation_image','mark'
    ];
}
