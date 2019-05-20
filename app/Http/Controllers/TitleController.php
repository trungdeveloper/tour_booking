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
        $titles = Title::all();
        return view('title.index', compact('titles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
<<<<<<< HEAD
    {
        $title = new Title;
        return view('titles/create', compact('title'));
=======
    {   
        $title = Title::all();
        return view('title.create', compact('title'));
>>>>>>> d29d64d54889577371586a2e5d4f103120a1a378
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
        return redirect()->route('title.index')->with('message','Thêm title thành công!'); 
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
        return view('title.edit', compact('title'));
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
<<<<<<< HEAD
          
        return redirect()->route('titles.update')->with('success','Sửa sản phẩm thành công!');
=======
        return redirect()->route('title.update')->with('message','Sửa sản phẩm thành công!');
>>>>>>> d29d64d54889577371586a2e5d4f103120a1a378
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

        return redirect('title')->with('message', 'Stock has been deleted Successfully');    
    }
}
