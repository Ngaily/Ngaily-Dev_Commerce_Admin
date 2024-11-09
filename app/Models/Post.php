<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'id',
        'title',
        'image',
        'description',
        'content',
        'category_id',
    ];

    public function category_blog()
    {
        return $this->belongsTo(CategoriesBlog::class, 'category_id', 'id');
    }
}
