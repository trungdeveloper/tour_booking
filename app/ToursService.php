<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ToursService extends Model
{
    protected $table='tours_services';

    public function tour()
    {
        return $this->belongsTo('App\Tour');
    }

    public function service()
    {
        return $this->belongsTo('App\Service');
    }
}
