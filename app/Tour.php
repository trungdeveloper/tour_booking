<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table='tours';
    protected $guarded = ['id']; // fields in the table
    protected $fillable = ['name', 'price', 'number_of_day', 'number_of_night', 'desciption', 'destination_id']; // fields in the table
   
    public function destination()
    {
        return $this->belongsTo('App\Destination');
    }

    public function tourImages()
    {
        return $this->hasMany('App\TourImage');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    public function tourServices()
    {
        return $this->hasMany('App\TourService');
    }

    public function bookings()
    {
        return $this->hasMany('App\Booking');
    }
    
}
