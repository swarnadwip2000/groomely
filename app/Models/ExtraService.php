<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraService extends Model
{
    use HasFactory;

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public static function extraServicePrice($service,$seller)
    {
        $rating  = SellerService::where('service_id', $service)->where('user_id',$seller)->first();
        if($rating != '')
        {
            return $rating->rate;
        } 
    } 
}
