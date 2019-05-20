<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingsService extends Model
{
    protected $table='bookings_services';

    public function booking()
    {
        return $this->belongsTo('App\Booking');
    }

    public function service()
    {
        return $this->belongsTo('App\Service');
    }
    
}
