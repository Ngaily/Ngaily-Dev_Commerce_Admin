<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'image';
    protected $fillable = [
        'product_id',
        'image'
    ];
    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id', 'id');
    }
}
