<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [ 'image', 'name', 'designation','description','status',];
}
