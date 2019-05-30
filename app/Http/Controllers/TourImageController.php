<?php

namespace App\Http\Controllers;

use App\TourImage;
use App\Tour;
use App\Http\Requests\TourImageRequest;
use Illuminate\Support\Facades\Storage;
use Validator;

class TourImageController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tourImage = TourImage::all();
      $tours = Tour::all();
      return view('tourImage/index', compact('tourImage','tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $tourImage = new TourImage;
      $tours = Tour::orderBy('id')->get();
      return view('tourImage/create', compact('tourImage','tours'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TourImageRequest $request)
    {
        if ($images = $request->file('image_path')) {
            foreach ($images as $image) {

                $tourImage = new TourImage($request->all());

                $validator = Validator::make($request->all(), $tourImage->rulesStore, $tourImage->messages);

                if ($validator->fails()) {
                  return redirect()->route('tourImages.create')->withErrors($validator)->withInput();
                }

                elseif ($image->isValid()) {
                  $tourImage->image_path = $image->store('public/images/tour');

                  $tourImage->save();

                  
                }            
            }
        }
        return redirect()->route('tourImages.index')->with('success','Add success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\IdentificationType  $identificationType
     * @return \Illuminate\Http\Response
     */
    public function show(TourImage $tourImage)
    {
        $tours = Tour::all();
        return view('tourImage/show',compact('tourImage','tours'));
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
        if (!$request->is_main) {
            $request->merge(['is_main' => false]);
        }
        
        $tourImage->update($request->all());

        if ($request->hasFile('image_path')) {

            $image = $request->file('image_path');
        
            $validator = Validator::make($request->all(), $tourImage->rulesUpdate, $tourImage->messages);
        
            if ($validator->fails()) {
                return redirect()->route('tourImages.edit', $tourImage->id)->withErrors($validator)->withInput();
            }
        
            elseif ($image->isValid()) {
                Storage::delete($tourImage->image_path);
                $tourImage->image_path = $image->store('public/images/tourImage');
            }
        }

        $tourImage->save();
        return redirect()->route('tourImages.index')->with('success','Sửa sản phẩm thành công!');
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
        $tourImage->delete();
        return "ok";
    }
}
