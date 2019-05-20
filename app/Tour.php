<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table='tours';
    
    public function destination()
    {
        return $this->belongsTo('App\Destination');
    }

    public function tourImage()
    {
        return $this->hasMany('App\TourImage');
    }

    public function review()
    {
        return $this->hasMany('App\Review');
    }

    public function toursServices()
    {
        return $this->hasMany('App\ToursService');
    }

    public function booking()
    {
        return $this->hasMany('App\Booking');
    }
    
}
