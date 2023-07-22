<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $casts = [
        'name' => 'object',
        'short_description' => 'object',
        'description' => 'object',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class,'product_categories','product_id');
    }

    public function reviews()
    {
        return $this->hasMany(ProductReview::class,'product_id');
    }


}
