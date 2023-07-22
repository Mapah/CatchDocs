<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $casts = [
        'contact' => 'object',
        'statistics' => 'object',
    ];

    public function city()
    {
        return $this->belongsTo(City::class,'city_id');
    }
}
