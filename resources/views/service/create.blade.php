@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.showHeader',
    ['title' => "Add a new service"]
  )

@endsection


@section('content')

  @include(
    'service/_form',
    
    [
      'errors'              =>  $errors,
      'action'              =>  URL::action('ServiceController@store'),
      'service'             =>  $service
    ]
  )

@endsection