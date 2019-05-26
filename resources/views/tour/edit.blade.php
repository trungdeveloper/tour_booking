@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.showHeader',
    ['title' => "Edit {$tour['label']}"]
  )

@endsection


@section('content')

  @include(
    'tour/_form',
    
    [
      'errors'              =>  $errors,
      'action'              =>  URL::action('TourController@update', $tour->id),
      'tour'                =>  $tour,
      'destinations'        =>  $destinations
    ]
  )

@endsection