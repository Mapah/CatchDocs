<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageAdvantage extends Model
{
    use HasFactory;
    protected $casts = [
        'advantage' => 'object'
    ];
}
