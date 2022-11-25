<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeCms extends Model
{
    use HasFactory;

    protected $fillable = [
        'banner_content_1',
        'banner_content_2',
        'section_1_title',
        'section_1_description',
        'section_2_title',
        'section_2_name',
        'section_2_description',
        'section_3_title',
        'section_3_description',
        'section_4_title',
        'section_4_description',
        'section_5_title',
        'section_5_description',
    ];
}
