<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'car_name', 'car_price', 'long_description', 'image', 'status',
    ];
}
