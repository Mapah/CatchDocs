<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bureau extends Model
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
    public function administration()
    {
        return $this->belongsTo(Administration::class,'Administration_id');
    }

}
