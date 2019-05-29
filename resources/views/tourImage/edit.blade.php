@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.showHeader',
    ['title' => "Edit {$tourImage['id']}"]
  )

@endsection


@section('content')

  @include(
    'tourImage/_form',
    [
      'errors'            =>  $errors,
      'action'            =>  URL::action('TourImageController@update', $tourImage->id),
      'tourImage'         =>  $tourImage,
      'tour'              =>  $tours
    ]
  )

@endsection