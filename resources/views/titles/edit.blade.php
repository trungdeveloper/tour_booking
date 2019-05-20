@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    ['title' => "Edit {$title['label']}"]
  )

@endsection


@section('content')

  @include(
    'titles/_form',
    
    [
      'errors'              =>  $errors,
      'action'              =>  URL::action('TitleController@update', $title->id),
      'titles'  =>  $title
    ]
  )

@endsection