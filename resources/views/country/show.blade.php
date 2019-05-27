@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.showHeader',
    ['title' => $country["label"]]
  )

@endsection


@section('content')

  <div class="my-frame">
    <div class="my-padding-bottom-12">
      Id: {!! $country["id"] !!}
    </div>
    
    <div class="d-flex flex-wrap">

      <div class="my-padding-right-8 my-padding-bottom-8">
        <a href="{!! route('countries.index') !!}" class="btn btn-sm btn-outline-dark">
          <i class="far fa-arrow-alt-circle-left my-margin-right-12"></i>
          <span>Back to list of countries</span>
        </a>
      </div>
      
      <div class="my-padding-bottom-8">
        <a href="{!! route('countries.edit', $country["id"]) !!}" class="btn btn-sm btn-outline-primary">
          <i class="far fa-edit my-margin-right-12"></i>
          <span>Edit</span>
        </a>
      </div>

    </div>
  </div>

@endsection