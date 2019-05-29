@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.indexHeader',
    [ 'title' => "You are not allowed to visit this page", 'forceDisplay' => false ]
  )

@endsection


@section('content')

  <img src="{!! URL::asset('images/forbidden.png') !!}" id="my-img-forbidden" class="mx-auto d-block">

@endsection
