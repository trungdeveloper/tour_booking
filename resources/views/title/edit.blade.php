@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    ['title' => "Edit {$Title['label']}"]
  )

@endsection


@section('content')

  @include(
    'title/_form',
    
    [
      'errors'              =>  $errors,
      'action'              =>  URL::action('TitleController@update', $Title->id),
      'title'               =>  $Title
    ]
  )

@endsection