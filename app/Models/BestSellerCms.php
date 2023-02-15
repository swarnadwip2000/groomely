<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BestSellerCms extends Model
{
    use HasFactory;
    protected $fillable = [
        'banner_img',
        'banner_name',
        'section_title',
        'section_description'
        
    ];
}
