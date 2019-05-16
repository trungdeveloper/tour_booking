<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IdentificationType extends Model
{
    protected $table='IdentificationTypes';

    public function user()
    {
        return $this->hasMany('App\User');
    }
}
