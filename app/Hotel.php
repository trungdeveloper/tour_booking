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

    public function hotelImage()
    {
        return $this->hasMany('App\HotelImage');
    }

    public function review()
    {
        return $this->hasMany('App\Review');
    }

    public function hotelsServices()
    {
        return $this->hasMany('App\HotelsService');
    }

    public function booking()
    {
        return $this->hasMany('App\Booking');
    }
}
