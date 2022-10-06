<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
        protected $fillable = [ 'plan_user_type','plan_name', 'amount', 'description', 'status',];
}
