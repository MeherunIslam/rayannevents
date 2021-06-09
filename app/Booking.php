<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
    

    public function order(){
        return $this->belongsTo(Order::class, 'order_id');
    }
}
