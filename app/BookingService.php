<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingService extends Model
{
    protected $table='booking_services';

    public function booking()
    {
        return $this->belongsTo('App\Booking');
    }

    public function service()
    {
        return $this->belongsTo('App\Service');
    }
    
}
