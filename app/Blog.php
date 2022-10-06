<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
       protected $fillable = [ 'slug','image', 'title', 'short_description', 'full_description', 'status',
    ];
}
