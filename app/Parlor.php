<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parlor extends Model
{
    protected $fillable = [
        'user_id', 'appoint_first_name', 'quantity', 'appoint_email', 'appoint_phone', 'appoint_date', 'appoint_time', 'status'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
   
}
