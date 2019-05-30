<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerMessage extends Model
{
  protected $table='customer_messages';
  protected $guarded = ['id']; // fields in the table
  protected $fillable = ['name', 'email', 'subject', 'message']; // fields in the table
  
  public $timestamps=true; // set timestamp, allow to use
}
