<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Appointment extends Model
{
    use HasFactory;

    public function bookTime()
    {
        return $this->belongsTo(BookingTime::class, 'booking_time_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function customer()
    {
        return $this->belongsTo(User::class);
    }

    public function seller()
    {
        return $this->belongsTo(User::class);
    }

    public function bookingTime()
    {
        return $this->belongsTo(BookingTime::class);
    }

    public function sellerService()
    {
        return $this->belongsTo(SellerService::class);
    }
    
    public function invoices()
    {
        return $this->hasMany(Invoice::class)->orderBy('id', 'desc');
    }

    public function setBookingDateAttribute($value)
    {
        $this->attributes['booking_date'] = date('m/d/Y', strtotime($value));
    }

    public static function getRating($id)
    {
        $get_rating  = Review::where('appointment_id',$id)->first();
        if($get_rating != '')
        {
            return $get_rating;
        }
    }

    public static function appointmentServicePrice($service,$seller)
    {
        $rating  = SellerService::where('service_id', $service)->where('user_id',$seller)->first();
        return $rating->rate;
    }
      
   
}
