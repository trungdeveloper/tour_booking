@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    ['title' => $hotelImage["name"]]
  )

@endsection


@section('content')

  <div class="my-margin-top-40 my-frame">
    <div class="my-padding-bottom-12">
      Id: {!! $hotelImage["id"] !!}
    </div>
    <div class="my-padding-bottom-12">
      Image_path: {!! $hotelImage["image_path"] !!}
    </div>
    <div class="my-padding-bottom-12">
      Is_main: {!! $hotelImage["is_main"] !!}
    </div>
    <div class="my_padding-bootom-12">
      Hotel Name: {!! $hotelImage->hotel->name !!}
    </div>
    
    <div class="d-flex flex-wrap">

      <div class="my-padding-right-8 my-padding-bottom-8">
        <a href="{!! route('hotelImages.index') !!}" class="btn btn-sm btn-outline-dark">
          <i class="far fa-arrow-alt-circle-left my-margin-right-12"></i>
          <span>Back to list of hotelImages</span>
        </a>
      </div>
      
      <div class="my-padding-bottom-8">
        <a href="{!! route('hotelImages.edit', $hotelImage["id"]) !!}" class="btn btn-sm btn-outline-primary">
          <i class="far fa-edit my-margin-right-12"></i>
          <span>Edit</span>
        </a>
      </div>

    </div>
  </div>

@endsection
