<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table='services';

    public function hotelsService()
    {
        return $this->hasMany('App\HotelsService');
    }

    public function toursService()
    {
        return $this->hasMany('App\ToursService');
    }

    public function booking()
    {
        return $this->hasMany('App\BookingsService');
    }
}
