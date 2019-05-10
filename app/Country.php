<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table='countries';

    public function User()
    {
        return $this->hasMany('App\User');
    }
}
