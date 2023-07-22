<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    public $timestamps =  false;
    protected $casts = [
        'extra' => 'object',
        'title' => 'object',
        'sub_title' => 'object',
        'short_description' => 'object',
        'description' => 'object',
    ];

    public function banners()
    {
        return $this->hasMany(PageBanner::class,'page_id');
    }
}
