<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table='hotels';
    protected $guarded = ['id']; // fields in the table

    protected $fillable = [
      'name',
      'address',
      'phone',
      'email',
      'website',
      'price',
      'rating',
      'destination_id',
      'description'
    ];
  
    public $timestamps=true; // set timestamp, allow to use
    
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
