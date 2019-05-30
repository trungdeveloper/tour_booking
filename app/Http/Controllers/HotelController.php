<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\HotelImage;
use App\Destination;
use App\Http\Requests\HotelRequest;
use App\Http\Requests\DestinationRequest;
use Illuminate\Support\Facades\DB;
use Validator;

class HotelController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkIfAllowed', ['except' => ['index', 'show']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $hotels = Hotel::all();
      $destinations = Destination::all();
      return view('hotel/index', compact('hotels', 'destinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $hotel = new Hotel; 
      $destinations = Destination::orderBy('label')->get();
      return view('hotel/create', compact('hotel', 'destinations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HotelRequest $request)
    {
        $hotel = new Hotel($request->all());
        $hotel->save();

        if ($images = $request->file('image_path')) {

            $hasMainImage = DB::table('hotel_images')
                    ->where('hotel_id', $hotel->id)
                    ->where('is_main', true)
                    ->count() > 0;

            foreach ($images as $index=>$image) {

                $hotelImage = new HotelImage;

                $validator = Validator::make($request->all(), $hotelImage->rulesStore, $hotelImage->messages);

                if ($validator->fails()) {
                  return redirect()->route('hotel.create')->withErrors($validator)->withInput();
                }

                elseif ($image->isValid()) {
                  $hotelImage->hotel_id = $hotel->id;
                  $hotelImage->image_path = $image->store('public/images/hotel');

                  if(!$hasMainImage && $index < 1){
                    $hotelImage->is_main = true;                    
                  }

                  $hotelImage->save();
                }            
                  
                
            }
        }

        return redirect()->route('hotels.index')->with('success','Add success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        return view('hotel/show',compact('hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        $destinations = Destination::get();
        return view('hotel/edit', compact('hotel', 'destinations'));

        $hotel = new Hotel;
        $destination = new Destination;
        return view('hotel/edit', compact('hotel', 'destination'));

        $destinations = Destination::orderBy('label')->get();
        return view('hotel/edit', compact('hotel', 'destinations'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(HotelRequest $request, hotel $hotel)
    {
        $hotel->update($request->all());

        return redirect()->route('hotels.index')->with('success','Update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return "ok";
    }
}
