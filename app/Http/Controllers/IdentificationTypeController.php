<?php

namespace App\Http\Controllers;

use App\IdentificationType;
use App\Http\Requests\IdentificationTypeRequest;


class IdentificationTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $identificationTypes = IdentificationType::all();
      return view('identificationType/index', compact('identificationTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $identificationType = new IdentificationType;
      return view('identificationType/create', compact('identificationType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IdentificationTypeRequest $request)
    {
        IdentificationType::create($request->all());
        return redirect()->route('identificationTypes.index')->with('success','Add success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\IdentificationType  $identificationType
     * @return \Illuminate\Http\Response
     */
    public function show(IdentificationType $identificationType)
    {
        return view('identificationType/show',compact('identificationType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\IdentificationType  $identificationType
     * @return \Illuminate\Http\Response
     */
    public function edit(IdentificationType $identificationType)
    {
        return view('identificationType/edit',compact('identificationType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\IdentificationType  $identificationType
     * @return \Illuminate\Http\Response
     */
    public function update(IdentificationTypeRequest $request, IdentificationType $identificationType)
    {
        $identificationType->update($request->all());
        return redirect()->route('identificationTypes.index')->with('success','Sửa sản phẩm thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\IdentificationType  $identificationType
     * @return \Illuminate\Http\Response
     */
    public function destroy(IdentificationType $identificationType)
    {
        $identificationType->delete();
        return "ok";
    }
}
