<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelImage extends Model
{
   	protected $table	=	'hotel_images';
   	protected $guarded	=	['id'];
   	protected $fillable	=	['hotel_id', 'image_path', 'is_main'];

   	public $timestamps 	=	true;
    
    public function hotel()
    {
        return $this->belongsTo('App\hotel');
    }
    
}
