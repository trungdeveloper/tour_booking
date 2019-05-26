@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.showHeader',
    ['title' => "Add a new tour"]
  )

@endsection


@section('content')

  @include(
    'tour/_form',
    
    [
      'errors'              =>  $errors,
      'action'              =>  URL::action('TourController@store'),
      'tour'                =>  $tour,
      'destinations'        =>  $destinations
    ]
  )

@endsection