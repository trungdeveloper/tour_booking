@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    ['title' => "Add a new country"]
  )

@endsection


@section('content')

  @include(
    'titles/_form',
    ['errors' => $errors, 'action' => URL::action('TitleController@store'), 'title' => $title]
  )

@endsection