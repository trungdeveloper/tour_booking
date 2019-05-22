<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table='services';
    protected $guarded = ['id']; // fields in the table
    protected $fillable = ['label','price']; // fields in the table

    public $timestamps=true;

    public function hotelServices()
    {
        return $this->hasMany('App\HotelService');
    }

    public function tourServices()
    {
        return $this->hasMany('App\TourService');
    }

    public function bookings()
    {
        return $this->hasMany('App\BookingService');
    }
}
