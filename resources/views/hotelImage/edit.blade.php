@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    ['title' => "Edit picture"]
  )

@endsection


@section('content')

  @include(
    'hotelImage/_form',
    
    [
      'errors'              =>  $errors,
      'action'              =>  URL::action('HotelImageController@update', $hotelImage->id),
      'hotelImage'          =>  $hotelImage
    ]
  )

@endsection