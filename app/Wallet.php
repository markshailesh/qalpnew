<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
      protected $fillable = [
        'user_id','plan_id','transaction_id','amount' ,'date', 'status'
    ];
}
