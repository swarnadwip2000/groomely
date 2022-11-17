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

    public function invoices()
    {
        return $this->hasMany(Invoice::class)->orderBy('id', 'desc');
    }

    public function setBookingDateAttribute($value)
    {
        $this->attributes['booking_date'] = date('m/d/Y', strtotime($value));
    }
}
