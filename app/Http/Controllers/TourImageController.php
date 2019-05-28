<?php

namespace App\Http\Controllers;

use App\TourImage;
use App\Http\Requests\TourImageRequest;


class TourImageController extends Controller
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
      $tourImage = TourImage::all();
      return view('tourImage/index', compact('tourImage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $tourImage = new TourImage;
      return view('tourImage/create', compact('tourImage'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TourImageRequest $request)
    {
        TourImage::create($request->all());
        return redirect()->route('tourImage.index')->with('success','Add success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\IdentificationType  $identificationType
     * @return \Illuminate\Http\Response
     */
    public function show(TourImage $tourImage)
    {
        return view('tourImage/show',compact('tourImage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\IdentificationType  $identificationType
     * @return \Illuminate\Http\Response
     */
    public function edit(TourImage $tourImage)
    {
        return view('tourImage/edit',compact('tourImage'));
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
        $tourImage->update($request->all());
        return redirect()->route('tourImage.index')->with('success','Sửa sản phẩm thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\IdentificationType  $identificationType
     * @return \Illuminate\Http\Response
     */
    public function destroy(TourImage $tourImage)
    {
        $tourImage->delete();
        return "ok";
    }
}
