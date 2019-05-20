<?php

namespace App\Http\Controllers;

use App\Title;
use App\Http\Requests\TitleRequest;


class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $titles = Title::all();
      return view('title/index', compact('titles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $Title = new Title;
      return view('title/create', compact('Title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TitleRequest $request)
    {
        Title::create($request->all());
        return redirect()->route('titles.index')->with('success','Add success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Title  $Title
     * @return \Illuminate\Http\Response
     */
    public function show(Title $Title)
    {
        return view('title/show',compact('Title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Title  $Title
     * @return \Illuminate\Http\Response
     */
    public function edit(Title $Title)
    {
        return view('title/edit',compact('Title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Title  $Title
     * @return \Illuminate\Http\Response
     */
    public function update(TitleRequest $request, Title $Title)
    {
        $Title->update($request->all());
        return redirect()->route('titles.index')->with('success','Sửa sản phẩm thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Title  $Title
     * @return \Illuminate\Http\Response
     */
    public function destroy(Title $Title)
    {
        $Title->delete();
        return "ok";
    }
}
