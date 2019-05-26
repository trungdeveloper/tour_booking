@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.showHeader',
    ['title' => $tour["name"]]
  )

@endsection


@section('content')

  <div class="my-frame">
    <div class="my-padding-bottom-12">
      Id: {!! $tour["id"] !!}
    </div>
    <div class="my-padding-bottom-12">
      Name: {!! $tour["name"] !!}
    </div>
    <div class="my-padding-bottom-12">
      Price: {!! $tour["price"] !!}
    </div>
    <div class="my-padding-bottom-12">
      Number_of_day: {!! $tour["number_of_days"] !!}
    </div>
    <div class="my-padding-bottom-12">
      Number_of_night: {!! $tour["number_of_nights"] !!}
    </div>
    <div class="my-padding-bottom-12">
      Description: {!! $tour["description"] !!}
    </div>
    <div class="my_padding-bootom-12">
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
