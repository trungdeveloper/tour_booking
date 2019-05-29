@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.showHeader',
    ['title' => "Add a new tour image"]
  )

@endsection


@section('content')

  @include(
    'tourImage/_form',
    [
      'errors'            =>    $errors,
      'action'            =>    URL::action('TourImageController@store'),
      'tourImage'         =>    $tourImage,
      'tours'             =>    $tour
    ]
  )

@endsection