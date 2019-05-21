@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    ['title' => "Edit {$destination['label']}"]
  )

@endsection


@section('content')

  @include(
    'destination/_form',
    [
    'errors'        =>   $errors,
    'action'        =>   URL::action('DestinationController@update',$destination->id), 
    'destination'   =>   $destination
    ]
  )

@endsection