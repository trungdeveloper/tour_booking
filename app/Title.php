<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
	protected $table='titles';

    public function User()
    {
        return $this->hasMany('App\User');
    }
}
