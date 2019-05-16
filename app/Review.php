<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table='reviews';
    
    public function hotel()
    {
        return $this->belongsTo('App\hotel');
    }

    public function tour()
    {
        return $this->belongsTo('App\tour');
    }
}
