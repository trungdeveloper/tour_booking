@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.showHeader',
    ['title' => $tourImage["tour_id"]]
  )

@endsection


@section('content')

  <div class="d-none my-margin-bottom-19" id="my-tour-image-discard-picture-status"></div>

  <div class="my-frame">
    <div class="my-padding-bottom-12">
      Id: {!! $tourImage["id"] !!}
    </div>

    <div class="my-padding-bottom-12">
      Is_main: {!! $tourImage["is_main"] !!}
    </div>

    <div class="my-padding-bottom-12">
      Tour: {!! $tourImage->tour->name !!}
    </div>

    @isset($tourImage['image_path'])    
      <div class="my-padding-bottom-12 my-tourImage-image">
        <img src="{!! Storage::url($tourImage->image_path) !!}">
      </div>
    @endisset
    
    <div class="d-flex flex-wrap">

      <div class="my-padding-right-8 my-padding-bottom-8">
        <a href="{!! route('tourImages.index') !!}" class="btn btn-sm btn-outline-dark">
          <i class="far fa-arrow-alt-circle-left my-margin-right-12"></i>
          <span>Back to list of tour Image</span>
        </a>
      </div>
      
      <div class="{!! isset($tourImages['image']) ? 'my-padding-right-8 ' : '' !!}my-padding-bottom-8">
        <a href="{!! route('tourImages.edit', $tourImage["id"]) !!}" class="btn btn-sm btn-outline-primary">
          <i class="far fa-edit my-margin-right-12"></i>
          <span>Edit</span>
        </a>
      </div>

      

    </div>
  </div>

@endsection