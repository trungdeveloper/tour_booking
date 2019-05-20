<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourImage extends Model
{
    protected $table='tour_images';
    
    public function tour()
    {
        return $this->belongsTo('App\tour');
    }
    
}
