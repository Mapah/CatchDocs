<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $casts = [
        'name' => 'object',
        'short_description' => 'object',
        'description' => 'object',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class,'service_categories','service_id');
    }

    public function reviews()
    {
        return $this->hasMany(ProductReview::class,'service_id');
    }
    public function approaches()
    {
        return $this->hasMany(ServiceApproach::class,'service_id');
    }

}
