<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $table='destinations';

    public function hotel()
    {
        return $this->hasMany('App\Hotel');
    }

    public function tour()
    {
        return $this->hasMany('App\Tour');
    }
}
