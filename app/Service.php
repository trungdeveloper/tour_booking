<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table='services';

     public function hotel()
    {
        return $this->hasMany('App\HotelsServices');
    }

    public function tour()
    {
        return $this->hasMany('App\ToursServices');
    }

    public function booking()
    {
        return $this->hasMany('App\BookingsService');
    }
}
