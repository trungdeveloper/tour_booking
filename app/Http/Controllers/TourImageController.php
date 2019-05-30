<?php

namespace App\Http\Controllers;

use App\TourImage;
use App\Tour;
use App\Http\Requests\TourImageRequest;
use Illuminate\Support\Facades\Storage;
use Validator;

class TourImageController extends Controller
{   
    public function __construct()
    {
        $this->middleware('checkIfAllowed');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\IdentificationType  $identificationType
     * @return \Illuminate\Http\Response
     */
    public function edit(TourImage $tourImage)
    {
        $tours = Tour::all();
        return view('tourImage/edit',compact('tourImage','tours'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\IdentificationType  $identificationType
     * @return \Illuminate\Http\Response
     */
    public function update(TourImageRequest $request, TourImage $tourImage)
    {
        if ($request->hasFile('image_path')) {

            $image = $request->file('image_path');
        
            $validator = Validator::make($request->all(), $tourImage->rulesUpdate, $tourImage->messages);
        
            if ($validator->fails()) {
                return redirect()->route('tourImages.edit', $tourImage->id)->withErrors($validator)->withInput();
            }
        
            elseif ($image->isValid()) {
                Storage::delete($tourImage->image_path);
                $tourImage->image_path = $image->store('public/images/tour');
                $tourImage->save();
            }
        }

        return redirect()->route('tours.show', $tourImage->tour_id)->with('success','Sửa sản phẩm thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\IdentificationType  $identificationType
     * @return \Illuminate\Http\Response
     */
    public function setAsMain(TourImage $tourImage)
    {
      $mainImages = TourImage::where('tour_id', $tourImage->tour_id)
          ->where('is_main', true)
          ->get();

      foreach ($mainImages as $mainImage) {
        $mainImage->is_main = false;
        $mainImage->save();
      }

      $tourImage->is_main = true;
      $tourImage->save();
      return 'ok';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\IdentificationType  $identificationType
     * @return \Illuminate\Http\Response
     */
    public function destroy(TourImage $tourImage)
    {
        if($tourImage->image_path != NULL){
            Storage::delete($tourImage->image_path);
        }

        if($tourImage->is_main){

          $firstMainImage = TourImage::where('tour_id', $tourImage->tour_id)
              ->where('is_main', false)
              ->first();

          if ($firstMainImage) {
            $firstMainImage->is_main = true;
            $firstMainImage->save();
          }

        }

        $tourImage->delete();
        return "ok";
    }
}
