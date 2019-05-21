<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table='services';
    protected $guarded = ['id']; // fields in the table
    protected $fillable = ['label','price']; // fields in the table

    public $timestamps=true;

    public function hotelsService()
    {
        return $this->hasMany('App\HotelsService');
    }

    public function toursService()
    {
        return $this->hasMany('App\ToursService');
    }

    public function booking()
    {
        return $this->hasMany('App\BookingsService');
    }
}
