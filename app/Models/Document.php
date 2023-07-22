<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $casts = [
        'name' => 'object',
        'qr_code' => 'object',
        'code' => 'object',
        'document' => 'object',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function bureau()
    {
        return $this->belongsTo(Bureau::class,'bureau_id');
    }
}
