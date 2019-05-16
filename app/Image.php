<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table='images';
    
    public function hotel()
    {
        return $this->belongsTo('App\hotel');
    }

    public function tour()
    {
        return $this->belongsTo('App\tour');
    }
}
