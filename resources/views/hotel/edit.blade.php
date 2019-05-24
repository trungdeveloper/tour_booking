@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    ['title' => "Edit {$hotel['label']}"]
  )

@endsection


@section('content')

  @include(
    'hotel/_form',
    
    [
      'errors'              =>  $errors,
      'action'              =>  URL::action('HotelController@update', $hotel->id),
      'hotel'                =>  $hotel,
      'destinations'        =>  $destinations
    ]
  )

@endsection