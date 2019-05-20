<?php

namespace App\Http\Controllers;

use App\Title;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = Title::all();
        return view('titles.index', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = new Title;
        return view('titles/create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = new Title; // ten model
        $title->label = $request->label;
        $title->save();
        return redirect()->route('titles.index')->with('success','Thêm title thành công!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('titles/show',compact('title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = Title::find($id);
        return view('titles.edit', compact('title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $title = Title::find($id); 
        $title->label = $request->label;
        $title->save();
          
        return redirect()->route('titles.update')->with('success','Sửa sản phẩm thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $title = Title::find($id);
        $title->delete();

        return redirect('titles')->with('success', 'Stock has been deleted Successfully');    
    }
}
