@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    ['title' => $tour["name"]]
  )

@endsection


@section('content')

  <div class="my-margin-top-40 my-frame">
    <div class="my-padding-bottom-12">
      Id: {!! $tour["id"] !!}<br>
      Name: {!! $tour["name"] !!}<br>
      Price: {!! $tour["price"] !!}<br>
      Number_of_day: {!! $tour["number_of_days"] !!}<br>
      Number_of_night: {!! $tour["number_of_nights"] !!}<br>
      Description: {!! $tour["description"] !!}<br>
      Destination: {!! $tour->destination->label !!}
    </div>
    
    <div class="d-flex flex-wrap">

      <div class="my-padding-right-8 my-padding-bottom-8">
        <a href="{!! route('tours.index') !!}" class="btn btn-sm btn-outline-dark">
          <i class="far fa-arrow-alt-circle-left my-margin-right-12"></i>
          <span>Back to list of tours</span>
        </a>
      </div>
      
      <div class="my-padding-bottom-8">
        <a href="{!! route('tours.edit', $tour["id"]) !!}" class="btn btn-sm btn-outline-primary">
          <i class="far fa-edit my-margin-right-12"></i>
          <span>Edit</span>
        </a>
      </div>

    </div>
  </div>

@endsection