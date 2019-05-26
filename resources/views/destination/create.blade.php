@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.showHeader',
    ['title' => "Add a new destination"]
  )

@endsection


@section('content')

  @include(
    'destination/_form',
    [
      'errors'        =>  $errors,
      'action'        =>  URL::action('DestinationController@store'),
      'destination'   =>  $destination
    ]
  )

@endsection