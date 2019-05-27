@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.showHeader',
    ['title' => "Add a new user category"]
  )

@endsection


@section('content')

  @include(
    'userType/_form',
    
    [
      'errors'              =>  $errors,
      'action'              =>  URL::action('UserTypeController@store'),
      'userType'            =>  $userType
    ]
  )

@endsection