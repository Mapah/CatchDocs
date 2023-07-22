<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageBanner extends Model
{
    use HasFactory;
    public $timestamps =  false;

    public function page()
    {
        return $this->belongsTo(Page::class,'page_id');
    }
}
