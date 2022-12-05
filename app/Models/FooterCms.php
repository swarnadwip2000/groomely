<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterCms extends Model
{
    use HasFactory;

    protected $fillable = [
        'copyright_content',
        'facebook_link',
        'youtube_link',
        'instagram_link',
        'address',
        'phone',
        'email'
    ];

    public static function footer_contents()
    {
        return FooterCms::first()->toArray();
    }

    public static function gallery_images()
    {
        return Gallery::get()->take(6);
    }

}
