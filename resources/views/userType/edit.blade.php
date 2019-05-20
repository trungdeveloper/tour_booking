@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    ['title' => "Edit {$userType['label']}"]
  )

@endsection


@section('content')

  @include(
    'userType/_form',
    
    [
      'errors'              =>  $errors,
      'action'              =>  URL::action('UserTypeController@update', $userType->id),
      'userType'  =>  $userType
    ]
  )

@endsection