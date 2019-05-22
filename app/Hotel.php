<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table='hotels';
    
    public function destination()
    {
        return $this->belongsTo('App\Destination');
    }

    public function hotelImages()
    {
        return $this->hasMany('App\HotelImage');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    public function hotelServices()
    {
        return $this->hasMany('App\HotelService');
    }

    public function bookings()
    {
        return $this->hasMany('App\Booking');
    }
    
}
