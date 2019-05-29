@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.showHeader',
    ['title' => Auth::check() ? "Add a new user" : "Register"]
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