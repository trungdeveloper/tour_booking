@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    ['title' => "Edit {$hotelImage['label']}"]
  )

@endsection


@section('content')

  @include(
    'hotelImage/_form',
    
    [
      'errors'              =>  $errors,
      'action'              =>  URL::action('HotelImageController@update', $hotelImage->id),
      'hotelImage'          =>  $hotelImage,
      'hotels'              =>  $hotels
    ]
  )

@endsection