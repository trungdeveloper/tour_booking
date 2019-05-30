@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    ['title' => "Edit picture"]
  )

@endsection


@section('content')

  @include(
    'tourImage/_form',
    
    [
      'errors'            =>  $errors,
      'action'            =>  URL::action('TourImageController@update', $tourImage->id),
      'tourImage'         =>  $tourImage
    ]
  )

@endsection