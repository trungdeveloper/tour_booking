<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelService extends Model
{
    protected $table='hotel_services';

    public function hotel()
    {
        return $this->belongsTo('App\Hotel');
    }

    public function service()
    {
        return $this->belongsTo('App\Service');
    }
}
