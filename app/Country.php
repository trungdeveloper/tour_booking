<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table='countries';
    protected $guarded = ['id']; // fields in the table
    protected $fillable = ['label']; // fields in the table

    public $timestamps=true; // set timestamp, allow to use
    
    public $rules = [
        'label' => 'required|unique:countries'
      ];

    public $messages = [
        'label.required' => 'The name of the country is required',
        'label.unique' => 'This country name has already been taken'
      ];

    public function user()
    {
        return $this->hasMany('App\User');
    }
}
