<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IdentificationType extends Model
{
    protected $table='identification_types';
    protected $guarded = ['id']; // fields in the table
    protected $fillable = ['label']; // fields in the table
    
    public $timestamps=true; // set timestamp, allow to use

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
