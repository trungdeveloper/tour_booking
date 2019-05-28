<?php

namespace App\Http\Controllers;

use App\Tour;
use App\Destination;
use App\Http\Requests\TourRequest;
use App\Http\Requests\DestinationRequest;

class TourController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkIfAllowed', ['except' => ['index']]);
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
        Tour::create($request->all());

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
