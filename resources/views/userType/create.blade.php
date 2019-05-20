@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    ['title' => "Add a new user type"]
  )

@endsection


@section('content')

  @include(
    'userType/_form',
    
    [
      'errors'              =>  $errors,
      'action'              =>  URL::action('UserTypeController@store'),
      'userType'  =>  $userType
    ]
  )

@endsection