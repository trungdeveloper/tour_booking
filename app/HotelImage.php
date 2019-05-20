<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelImage extends Model
{
   protected $table='hotel_images';
    
    public function hotel()
    {
        return $this->belongsTo('App\hotel');
    }
}
