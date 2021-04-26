<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'sku',
        'name',
        'slug',
        'description',
        'category_id',
        'unit_price',
        'sale_price',
        'preview_image_name',
        'preview_image_path',
        'views',
        'available_stock'
    ];
}
