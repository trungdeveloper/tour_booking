@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    [
      'title' => Auth::check() && Auth::id() == $user->id ?

          "Edit your account" :

          "Edit "
            .$user["title"]["label"]
            .' '
            .$user["first_name"]
            .' '
            .$user["middle_name"]
            .' '
            .$user["last_name"]
    ]
  )

@endsection


@section('content')

  @include(
    'user/_form',
    [
      'errors'      =>  $errors,
      'action'      =>  URL::action('UserController@update', $user->id),
      'user'        =>  $user,
      'userTypes'   =>  $userTypes,
      'countries'   =>  $countries
    ]
  )

@endsection