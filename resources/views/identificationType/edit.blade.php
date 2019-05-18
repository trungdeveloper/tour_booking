@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    ['title' => "Edit {$identificationType['label']}"]
  )

@endsection


@section('content')

  @include(
    'identificationType/_form',
    
    [
      'errors' => $errors,
      'action' => URL::action('IdentificationTypeController@update', $identificationType->id),
      'identificationType' => $identificationType
    ]
  )

@endsection