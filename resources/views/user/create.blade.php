@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    ['title' => "Add a new user"]
  )

@endsection


@section('content')

  @include(
    'user/_form',
    [
      'errors'      =>  $errors,
      'action'      =>  URL::action('UserController@store'),
      'user'        =>  $user
    ]
  )

@endsection