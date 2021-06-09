<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarBook extends Model
{
    protected $fillable = [
        'user_id', 'car_id', 'client_first_name', 'client_last_name', 'client_email', 'client_address', 'client_phone', 'client_date', 'client_time', 'status',
    ];

    public function car(){
        return $this->belongsTo(Car::class, 'car_id')->withTimestamps();
    }

    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
   protected $guarded = [];
}
