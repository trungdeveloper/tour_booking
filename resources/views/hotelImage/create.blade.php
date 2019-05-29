@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    ['title' => "Add a new hotel image"]
  )

@endsection


@section('content')

  @include(
    'hotelImage/_form',
    
    [
      'errors'              =>  $errors,
      'action'              =>  URL::action('HotelImageController@store'),
      'hotelImage'          =>  $hotelImage,
      'hotels'              =>  $hotels
    ]
  )

@endsection