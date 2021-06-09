<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    protected $fillable = [
        'position_id', 'apply_name', 'apply_contact', 'apply_email', 'file', 'status',
    ];

    public function position(){
        return $this->belongsTo(Position::class, 'position_id');
    }
}
