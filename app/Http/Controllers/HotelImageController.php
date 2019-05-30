<?php

namespace App\Http\Controllers;

use App\HotelImage;
use App\Hotel;
use App\Http\Requests\HotelImageRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Validator;

class HotelImageController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HotelImage  $hotelImage
     * @return \Illuminate\Http\Response
     */
    public function edit(HotelImage $hotelImage)
    {
        $hotels = Hotel::all();
        return view('hotelImage/edit', compact('hotelImage', 'hotels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HotelImage  $hotelImage
     * @return \Illuminate\Http\Response
     */
    public function update(HotelImageRequest $request, HotelImage $hotelImage)
    {
        if ($request->hasFile('image_path')) {

            $image = $request->file('image_path');
        
            $validator = Validator::make($request->all(), $hotelImage->rulesUpdate, $hotelImage->messages);
        
            if ($validator->fails()) {
                return redirect()->route('hotelImages.edit', $hotelImage->id)->withErrors($validator)->withInput();
            }
        
            elseif ($image->isValid()) {
                Storage::delete($hotelImage->image_path);
                $hotelImage->image_path = $image->store('public/images/hotel');
                $hotelImage->save();
            }
        }

        return redirect()->route('hotels.show', $hotelImage->hotel_id)->with('success','Edit is success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HotelImage  $hotelImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(HotelImage $hotelImage)
    {
      if($hotelImage->image_path != NULL){
        Storage::delete($hotelImage->image_path);
      }

      if($hotelImage->is_main){

        $firstMainImage = HotelImage::where('hotel_id', $hotelImage->hotel_id)
            ->where('is_main', false)
            ->first();

        if ($firstMainImage) {
          $firstMainImage->is_main = true;
          $firstMainImage->save();
        }

      }

      $hotelImage->delete();
      return 'ok';
    }
}
  