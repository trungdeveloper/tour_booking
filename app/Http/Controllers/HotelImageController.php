<?php

namespace App\Http\Controllers;

use App\HotelImage;
use App\Hotel;
use App\Http\Requests\HotelImageRequest;
use Illuminate\Http\Request;

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
        $hotelImage = HotelImage::create($request->all());
        $image = $request->file('image_path');      
        $hotelImage->image = $image->store('public/images/hotel');
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
        return view('hotelImage/edit', compact('hotelImage'));
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
        Storage::delete($dish->image);
        
        $image = $request->file('image_path');
        $dish->image = $image->store('public/images/hotel');

        $dish->update($request->all());
        $dish->save();

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
        $hotelImage->delete();
        return 'ok';
    }
}
