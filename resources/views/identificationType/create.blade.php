@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.showHeader',
    ['title' => "Add a new identification type"]
  )

@endsection


@section('content')

  @include(
    'identificationType/_form',
    
    [
      'errors'              =>  $errors,
      'action'              =>  URL::action('IdentificationTypeController@store'),
      'identificationType'  =>  $identificationType
    ]
  )

@endsection