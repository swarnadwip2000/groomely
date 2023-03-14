<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Review;

class Service extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function serviceType()
    {
        return $this->belongsTo(ServiceType::class);
    }

    public function additionalService()
    {
        return $this->belongsTo(ServiceCategory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }

    public function images()
    {
        return $this->hasMany(ServiceImage::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public static function singleImage($id)
    {
        $image = ServiceImage::where('service_id', $id)->orderBy('id', 'desc')->first();
        return $image->slider_image;
    }

    public static function totalRatingService($id)
    {
        $total_user_rating = Review::where('service_id', $id)->count();
        if($total_user_rating > 0)
        {
        $sum_rating = Review::where('service_id', $id)->sum('rating');
        $total_rating = ($sum_rating / $total_user_rating);
        return $total_rating;
        }
      
    }

    public function SellerService()
    {
        return $this->hasMany(SellerService::class);
    }

   
}
