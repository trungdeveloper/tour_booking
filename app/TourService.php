<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourService extends Model
{
    protected $table='tour_services';

    public function tour()
    {
        return $this->belongsTo('App\Tour');
    }

    public function service()
    {
        return $this->belongsTo('App\Service');
    }
}
