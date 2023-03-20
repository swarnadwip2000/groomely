<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerService extends Model
{
    use HasFactory;
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function ratingService($id)
    {
        $total_user_rating = Review::where('service_id', $id)->count();
        if($total_user_rating > 0)
        {
        $sum_rating = Review::where('service_id', $id)->sum('rating');
        $total_rating = ($sum_rating / $total_user_rating);
        return $total_rating;
        }
      
    }


}
