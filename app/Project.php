<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'group_id', 'category_id', 'project_name', 'short_description', 'long_description', 'image_one',  'image_two',
        'image_three', 'status',
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function group(){
        return $this->belongsTo(Group::class, 'group_id');
    }
}
