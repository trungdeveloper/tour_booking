<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	 protected $table='users';
    protected $guarded = ['id']; // fields in the table
    protected $fillable = ['first_name', 'middle_name', 'last_name', 'date_of_birth', 'address', 
    'user_type_id','country_id','title_id','identification_type_id',
    'email','phone','identification_number', 'password']; // fields in the table
    
    public $timestamps=true; // set timestamp, allow to use


    public $messages = [
        'password.required'   =>  'Please enter password',
        'password.min'        =>  'Password must have at least 8 characters',
        'password.max'        =>  'Password must not have more than 20 characters',
        'password.confirmed'  =>  'Password and password confirmation do not match'
      ];


    public function rules()
    {
      return [
        'password'  =>  'required|min:8|max:20|confirmed'
      ];
    }

    
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

    public function hasAdminRights() {
      // if user is manager
      return in_array($this['user_type_id'], [3]);
    }
}
