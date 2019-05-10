<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $table='users';
    
    public function titles()
    {
        return $this->belongsTo('App\Title');
    }

    public function countries()
    {
        return $this->belongsTo('App\Country');
    }
 
    public function identificationType()
    {
        return $this->belongsTo('App\IdentificationType');
    }
}
