<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $casts = [
        'name' => 'object',
        'short_description' => 'object',
    ];

    public function setting()
    {
        return $this->belongsTo(Session::class,'setting_id');
    }
    public function advantages()
    {
        return $this->hasMany(PackageAdvantage::class,'package_id');
    }
}
