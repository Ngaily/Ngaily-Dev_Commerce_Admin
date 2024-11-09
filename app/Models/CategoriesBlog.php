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
    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }
}
