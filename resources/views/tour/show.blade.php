@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.showHeader',
    ['title' => $tour["name"]]
  )

@endsection


@section('content')

  <div class="my-frame">
    <div class="my-padding-bottom-12">
      Id: {!! $tour["id"] !!}
    </div>
    <div class="my-padding-bottom-12">
      Name: {!! $tour["name"] !!}
    </div>
    <div class="my-padding-bottom-12">
      Price: {!! $tour["price"] !!}
    </div>
    <div class="my-padding-bottom-12">
      Number_of_day: {!! $tour["number_of_days"] !!}
    </div>
    <div class="my-padding-bottom-12">
      Number_of_night: {!! $tour["number_of_nights"] !!}
    </div>
    <div class="my-padding-bottom-12">
      Description: {!! $tour["description"] !!}
    </div>
    <div class="my_padding-bootom-12">
      Destination: {!! $tour->destination->label !!}
    </div>

    @if(count($tour->tourImages) > 0)
    <div class="row my-margin-top-19">
      @foreach($tour->tourImages as $tourImage)
      <div class="col-md-6 col-lg-4 my-padding-bottom-19 my-tour-image">
        <figure class="my-padding-bottom-12 text-center my-hotel-figure">
          <img src="{!! Storage::url($tourImage['image_path']) !!}">

          @if (Auth::check() && Auth::user()->hasAdminRights())

          <div class='text-center'>

            <button
            class="
            btn
            btn-sm
            btn-warning
            my-tour-image-is-main
            {!! $tourImage->is_main ? '' : 'd-none' !!}
            "
            >
            <div class="d-flex align-items-center">
              <div class="my-margin-right-12 my-action-button-icon">
                <i class="far fa-dot-circle"></i>
              </div>

              <div class="text-left">
                MAIN
              </div>
            </div>
            </button>


            <button
            class="
            btn
            btn-sm
            btn-outline-warning
            bg-dark
            my-tour-image-set-as-main
            {!! $tourImage->is_main ? 'd-none' : '' !!}
            "

            data-token="{!! csrf_token() !!}"
            data-url="{!! route('tourImages.setAsMain', $tourImage['id']) !!}"
            >
            <div class="d-flex align-items-center text-warning">
              <div class="my-margin-right-12 my-action-button-icon">
                <i class="far fa-dot-circle"></i>
              </div>

              <div class="text-left">
                Set as main
              </div>
            </div>
            </button>

          </div>


          <figcaption class="d-flex flex-wrap justify-content-center my-margin-top-8">

            <div class="my-padding-right-8 my-padding-bottom-8">
              <a
              href="{!! route('tourImages.edit', $tourImage["id"]) !!}"
              class="btn btn-sm btn-outline-primary bg-dark"
              >
              <div class="d-flex align-items-center text-light">
                <div class="my-margin-right-12 my-action-button-icon">
                  <i class="far fa-edit"></i>
                </div>

                <div class="my-action-button-label text-left">
                  Edit
                </div>
              </div>
              </a>
            </div>

            <div class="my-padding-bottom-8">
              <button
              class="btn btn-sm btn-danger my-tour-image-delete"
              data-token="{!! csrf_token() !!}"
              data-url="{!! route('tourImages.destroy', $tourImage['id']) !!}"
              >
              <div class="d-flex align-items-center">
                <div class="my-margin-right-12 my-action-button-icon">
                  <i class="far fa-trash-alt"></i>
                </div>

                <div class="my-action-button-label text-left">
                  Delete
                </div>
              </div>
              </button>
            </div>

          </figcaption>
        @endif

        </figure>
      </div>
      @endforeach
    </div>
    @endif
    
    <div class="d-flex flex-wrap">

      <div class="my-padding-right-8 my-padding-bottom-8">
        <a href="{!! route('tours.index') !!}" class="btn btn-sm btn-outline-dark">
          <i class="far fa-arrow-alt-circle-left my-margin-right-12"></i>
          <span>Back to list of tours</span>
        </a>
      </div>
      
      @if (Auth::check() && Auth::user()->hasAdminRights())
        <div class="my-padding-bottom-8">
          <a href="{!! route('tours.edit', $tour["id"]) !!}" class="btn btn-sm btn-outline-primary">
            <i class="far fa-edit my-margin-right-12"></i>
            <span>Edit</span>
          </a>
        </div>
      @endif

    </div>
  </div>

@endsection
