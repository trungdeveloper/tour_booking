@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.showHeader',
    ['title' => "Edit {$country['label']}"]
  )

@endsection


@section('content')

  @include(
    'country/_form',
    ['errors' => $errors, 'action' => URL::action('CountryController@update', $country->id), 'country' => $country]
  )

@endsection