<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourImage extends Model
{
    protected $table='tour_images';
    protected $guarded = ['id']; // fields in the table
    protected $fillable = ['tour_id', 'image_path', 'is_main'];

    
    public $timestamps=true; // set timestamp, allow to use
    
    public $rulesStore = [
        'image_path' => 'required|image|mimes:jpeg,png,jpg,gif,bmp,svg|max:2048'
    ];

    public $rulesUpdate = [
        'image_path' => 'image|mimes:jpeg,png,jpg,gif,bmp,svg|max:2048'
    ];

    public $messages = [
        'image_path.required'   =>  'Picture is required',
        'image_path.image'      =>  'Only .jpeg, .jpg, .png, .gif, .bmp and .svg files are allowed',
        'image_path.mimes'      =>  'Only .jpeg, .jpg, .png, .gif, .bmp and .svg files are allowed',
        'image_path.max'        =>  'Picture is too big'
    ];
    public function tour()
    {
        return $this->belongsTo('App\Tour');
    }
    
}
