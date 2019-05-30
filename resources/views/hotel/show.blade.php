@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.showHeader',
    ['title' => $hotel["name"]]
  )

@endsection


@section('content')

  <div class="my-frame">
    <div class="my-padding-bottom-12">
      Id: {!! $hotel["id"] !!}<br>
      Name: {!! $hotel["name"] !!}<br>
      Address: {!! $hotel["address"] !!}<br>
      Phone: {!! $hotel["phone"] !!}<br>
      Email: {!! $hotel["email"] !!}<br>
      Website: {!! $hotel["website"] !!}<br>
      Price: {!! $hotel["price"] !!}<br>
      Rating: {!! $hotel["rating"] !!}<br>
      Description: {!! $hotel["description"] !!}<br>
      Destination: {!! $hotel->destination->label !!}
    </div>


    @if(count($hotel->hotelImages) > 0)
      <div class="row">
        @foreach($hotel->hotelImages as $hotelImage)
          <div class="col-md-6 col-lg-4 my-padding-bottom-19 my-filter-object my-hotel-image">
            <div class="my-frame">
              <div class="my-padding-bottom-12">
                <img src="{!! Storage::url($hotelImage['image_path']) !!}">
              </div>
            </div>
          </div>
        @endforeach
      </div>
    @endif

    
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