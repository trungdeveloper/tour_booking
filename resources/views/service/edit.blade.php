@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.showHeader',
    ['title' => "Edit {$service['label']}"]
  )

@endsection


@section('content')

  @include(
    'service/_form',
    
    [
      'errors'              =>  $errors,
      'action'              =>  URL::action('ServiceController@update', $service->id),
      'title'               =>  $service
    ]
  )

@endsection