<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'path',
        'title',
        'source',
        'text',
        'tags',
        'offices_id',
        'annotations'
    ];
}
