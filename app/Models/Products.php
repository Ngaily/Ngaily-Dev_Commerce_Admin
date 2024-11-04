<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $fillbale = [
        'id',
        'product_name',
        'image',
        'price',
        'description',
        'quantity',
        'status',
        'category_id',
    ];
}
