<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourImage extends Model
{
    protected $table='tour_images';
    protected $guarded = ['id']; // fields in the table
    
    public $timestamps=true; // set timestamp, allow to use
    
    public function tour()
    {
        return $this->belongsTo('App\tour');
    }
    
}
