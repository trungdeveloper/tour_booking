@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    [
      'title' => "Edit "
          .$user["title"]["label"]
          .' '
          .$user["first_name"]
          .' '
          .$user["last_name"]
          .' '
          .$user["middle_name"]
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