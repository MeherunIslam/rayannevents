<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
    'user_name', 'user_contact', 'user_email', 'user_message',
    ];
}
