<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table='booking';

    public function bookingServices()
    {
        return $this->hasMany('App\BookingService');
    }

    public function hotel()
    {
        return $this->belongsTo('App\Hotel');
    }

    public function tour()
    {
        return $this->belongsTo('App\Tour');
    }
    
}
