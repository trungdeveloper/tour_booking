<?php

namespace App\Http\Controllers;

use App\HotelImage;
use App\Hotel;
use App\Http\Requests\HotelImageRequest;
use Illuminate\Support\Facades\Storage;

class HotelImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotelImages = HotelImage::all();
        $hotels = Hotel::all();
        return view('hotelImage/index', compact('hotelImages', 'hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hotelImage = new HotelImage;
        $hotels = Hotel::all();
        return view('hotelImage/create', compact('hotelImage', 'hotels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HotelImageRequest $request)
    {      
        $hotelImage = new HotelImage($request->all());
        if ($request->hasFile('image_path')) {
            $image = $request->file('image_path');        
            if ($image->isValid()) {
                $hotelImage->image_path = $image->store('public/images/hotel');
            }
            $hotelImage->save();
        }   
        return redirect()->route('hotelImages.index')->with('success','Add success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HotelImage  $hotelImage
     * @return \Illuminate\Http\Response
     */
    public function show(HotelImage $hotelImage)
    {
        return view('hotelImage/show', compact('hotelImage'));
    }

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
        if (!$request->is_main) {
            $request->merge(['is_main' => false]);
        }
        if ($request->hasFile('image_path')) {
        
            $image = $request->file('image_path');
            if ($image->isValid()) {
                Storage::delete($hotelImage->image_path);
                $hotelImage->update($request->all());
                $hotelImage->image_path = $image->store('public/images/hotel');
                $hotelImage->save();
            }
        }
      return redirect()->route('hotelImages.index')->with('success','Edit is success!');
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
        $hotelImage->delete();
        return 'ok';
    }
}
