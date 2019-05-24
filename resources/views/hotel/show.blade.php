@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    ['title' => $hotel["label"]]
  )

@endsection


@section('content')

  <div class="my-margin-top-40 my-frame">
    <div class="my-padding-bottom-12">
      Id: {!! $hotel["id"] !!}<br>
      Name: {!! $hotel["name"] !!}<br>
      Address: {!! $hotel["address"] !!}<br>
      Phone: {!! $hotel["phone"] !!}<br>
      Email: {!! $hotel["email"] !!}<br>
      Website: {!! $hotel["website"] !!}<br>
      Price: {!! $hotel["price"] !!}<br>
      Rating: {!! $hotel["rating"] !!}<br>
      Number_of_night: {!! $hotel["number_of_nights"] !!}<br>
      Description: {!! $hotel["description"] !!}<br>
      Destination: {!! $hotel->destination->label !!}
    </div>
    
    <div class="d-flex flex-wrap">

      <div class="my-padding-right-8 my-padding-bottom-8">
        <a href="{!! route('hotels.index') !!}" class="btn btn-sm btn-outline-dark">
          <i class="far fa-arrow-alt-circle-left my-margin-right-12"></i>
          <span>Back to list of hotels</span>
        </a>
      </div>
      
      <div class="my-padding-bottom-8">
        <a href="{!! route('hotels.edit', $hotel["id"]) !!}" class="btn btn-sm btn-outline-primary">
          <i class="far fa-edit my-margin-right-12"></i>
          <span>Edit</span>
        </a>
      </div>

    </div>
  </div>

@endsection