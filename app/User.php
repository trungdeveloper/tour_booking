<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $table='users';
    protected $guarded = ['id']; // fields in the table
    protected $fillable = ['first_name', 'middle_name', 'last_name', 'date_of_birth', 'address', 
    'user_type_id','country_id','title_id','identification_type_id',
    'email','phone','identification_number']; // fields in the table
    
    public $timestamps=true; // set timestamp, allow to use
    
    public function title()
    {
        return $this->belongsTo('App\Title');
    }

    public function userType()
    {
        return $this->belongsTo('App\UserType');
    }

    public function country()
    {
        return $this->belongsTo('App\Country');
    }
 
    public function identificationType()
    {
        return $this->belongsTo('App\IdentificationType');
    }
}
