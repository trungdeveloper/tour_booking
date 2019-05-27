@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.showHeader',
    ['title' => "Edit {$title['label']}"]
  )

@endsection


@section('content')

  @include(
    'title/_form',
    
    [
      'errors'              =>  $errors,
      'action'              =>  URL::action('TitleController@update', $title->id),
      'title'               =>  $title
    ]
  )

@endsection