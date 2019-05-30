<?php

namespace App\Http\Controllers;

use App\CustomerMessage;
use App\Http\Requests\CustomerMessageRequest;


class CustomerMessageController extends Controller
{
  public function __construct()
  {
    $this->middleware('checkIfAllowed', ['except' => ['store']]);
  }
  
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $customerMessages = CustomerMessage::orderBy('created_at', 'desc')->get();
    return view('customerMessage/index', compact('customerMessages'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(CustomerMessageRequest $request)
  {
    CustomerMessage::create($request->all());
    return redirect()->route('home')->with('success', 'Your message has successfully been sent');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\CustomerMessage  $customerMessage
   * @return \Illuminate\Http\Response
   */
  public function destroy(CustomerMessage $customerMessage)
  {
    $customerMessage->delete();
    return 'ok';
  }
}
