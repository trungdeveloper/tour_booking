<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $table='destinations';
    protected $guarded = ['id']; // fields in the table
    protected $fillable = ['label']; // fields in the table
    
    public $timestamps=true; // set timestamp, allow to use
    
    public function hotels()
    {
        return $this->hasMany('App\Hotel');
    }

    public function tours()
    {
        return $this->hasMany('App\Tour');
    }
}
