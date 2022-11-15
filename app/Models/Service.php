<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(ServiceImage::class);
    }

    public static function singleImage($id)
    {
        $image = ServiceImage::where('service_id', $id)->orderBy('id', 'desc')->first();
        return $image->slider_image;
    }
}
