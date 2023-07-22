<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administration extends Model
{
    use HasFactory;

    protected $casts = [
        'name' => 'object',
        'description' => 'object',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function bureaux()
    {
        return $this->hasMany(Bureau::class,'bureau_id');
    }
}
