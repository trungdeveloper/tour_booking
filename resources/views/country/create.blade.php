@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.showHeader',
    ['title' => "Add a new country"]
  )

@endsection


@section('content')

  @include(
    'country/_form',
    ['errors' => $errors, 'action' => URL::action('CountryController@store'), 'country' => $country]
  )

@endsection