@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    ['title' => "Add a new hotel"]
  )

@endsection


@section('content')

  @include(
    'hotel/_form',
    
    [
      'errors'              =>  $errors,
      'action'              =>  URL::action('HotelController@store'),
      'hotel'               =>  $hotel,
      'destinations'        =>  $destinations
    ]
  )

@endsection