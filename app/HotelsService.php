<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelsService extends Model
{
    protected $table='hotels_services';

    public function hotel()
    {
        return $this->belongsTo('App\Hotel');
    }

    public function service()
    {
        return $this->belongsTo('App\Service');
    }
}
