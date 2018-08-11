<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'alias', 'thumb', 'description', 'price', 'old_price', 'quantity', 'images', 'category_id', 'brand_id'
    ];
}
