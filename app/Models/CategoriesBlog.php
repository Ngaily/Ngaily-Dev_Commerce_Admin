<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriesBlog extends Model
{
    protected $table = 'category_blogs';

    protected $fillable = [
        'id',
        'category_name'
    ];
}
