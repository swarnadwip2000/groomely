<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutCms extends Model
{
    use HasFactory;

    protected $fillable = [
        'banner_name',
        'section_1_title',
        'section_1_description',
        'section_1_name',
        'section_2_title',
        'section_3_name',
        'section_3_title',
        'section_3_description'
    ];
}
