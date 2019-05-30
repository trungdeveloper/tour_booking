<?php

namespace App\Http\Controllers;

use App\Tour;
use App\tourImage;
use App\Destination;
use App\Http\Requests\TourRequest;
use App\Http\Requests\DestinationRequest;
use Illuminate\Support\Facades\DB;
use Validator;

class TourController extends Controller
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
      $tours = Tour::all();
      $destinations = Destination::all();
      return view('tour/index', compact('tours', 'destinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $tour = new Tour; 
      $destinations = Destination::orderBy('label')->get();
      return view('tour/create', compact('tour', 'destinations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TourRequest $request)
    {
        $tour = new Tour($request->all());
        $tour->save();

        if ($images = $request->file('image_path')) {

            $hasMainImage = DB::table('tour_images')
                    ->where('tour_id', $tour->id)
                    ->where('is_main', true)
                    ->count() > 0;

            foreach ($images as $index=>$image) {

                $tourImage = new TourImage;

                $validator = Validator::make($request->all(), $tourImage->rulesStore, $tourImage->messages);

                if ($validator->fails()) {
                  return redirect()->route('tours.create')->withErrors($validator)->withInput();
                }

                elseif ($image->isValid()) {
                  $tourImage->tour_id = $tour->id;
                  $tourImage->image_path = $image->store('public/images/tour');

                  if(!$hasMainImage && $index < 1){
                    $tourImage->is_main = true;                    
                  }

                  $tourImage->save();
                }            
                  
                
            }
        }

        return redirect()->route('tours.index')->with('success','Add success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {
        return view('tour/show',compact('tour'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        $destinations = Destination::get();
        return view('tour/edit', compact('tour', 'destinations'));

        $tour = new Tour;
        $destination = new Destination;
        return view('tour/edit', compact('tour', 'destination'));

        $destinations = Destination::orderBy('label')->get();
        return view('tour/edit', compact('tour', 'destinations'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(TourRequest $request, Tour $tour)
    {
        $tour->update($request->all());

        if ($images = $request->file('image_path')) {

            $hasMainImage = DB::table('tour_images')
                    ->where('tour_id', $tour->id)
                    ->where('is_main', true)
                    ->count() > 0;

            foreach ($images as $index=>$image) {

                $tourImage = new TourImage;

                $validator = Validator::make($request->all(), $tourImage->rulesStore, $tourImage->messages);

                if ($validator->fails()) {
                  return redirect()->route('tours.edit', $tour->id)->withErrors($validator)->withInput();
                }

                elseif ($image->isValid()) {
                  $tourImage->tour_id = $tour->id;
                  $tourImage->image_path = $image->store('public/images/tour');

                  if(!$hasMainImage && $index < 1){
                    $tourImage->is_main = true;                    
                  }

                  $tourImage->save();
                }            
                  
                
            }
        }

        return redirect()->route('tours.index')->with('success','Update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tour $tour)
    {
        $tour->delete();
        return "ok";
    }
}
