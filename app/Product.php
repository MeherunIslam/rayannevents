<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'group_id', 'category_id', 'subcategory_id', 'product_name', 'product_slug', 'product_code', 
        'product_quantity', 'short_description', 'long_description', 'price', 'image_one',  'image_two',
        'image_three', 'status',
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function subcategory(){
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }
}
