<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = [
        'position_name', 'short_description', 'long_description', 'status', 
    ];
}
