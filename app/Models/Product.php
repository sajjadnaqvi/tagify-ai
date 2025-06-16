<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'tags',
        'images'
    ];

    protected $casts = [
        'tags' => 'array',
        'images' => 'array',
    ];
}
