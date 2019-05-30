@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.showHeader',
    ['title' => $tour["name"]]
  )

@endsection


@section('content')

  <div class="d-none my-margin-bottom-19" id="my-entity-delete-status"></div>
    
  <div class="my-frame">

    <div class="row">
      <div class="col-sm-6 my-padding-bottom-12">
        <div class="d-flex">
          <b class="my-padding-right-19 my-tour-icon">Id</b>
          <i>{!! $tour->id !!}</i>
        </div>
      </div>

      <div class="col-sm-6 my-padding-bottom-12">
        <div class="d-flex align-items-start my-padding-bottom-12">
          <div class="my-padding-right-19 my-tour-icon">
            <i class="far fa-clock"></i>
          </div>

          <div class="my-tour-label">
            {!! $tour->number_of_days !!} day(s) & {!! $tour->number_of_nights !!} night(s)
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-sm-6">

        <div class="d-flex align-items-start my-padding-bottom-12">

          <div class="my-padding-right-19 my-tour-icon">
            <i class="fas fa-map-signs"></i>
          </div>

          <div class="my-tour-label">
            {!! $tour->destination->label !!}  
          </div>

        </div>

      </div>


      @isset($tour['description'])
        <div class="col-sm-6 my-padding-bottom-12">
          <div class="d-flex align-items-start">
            <div class="my-padding-right-19 my-tour-icon">
              <i class="fas fa-info-circle"></i>
            </div>

            <div class="my-tour-label">
              <em>{!! str_replace("\n","<br>", $tour->description) !!}</em>
            </div>
          </div>
        </div>
      @endisset

    </div>


    <div class="text-right">VNĐ {!! $tour->price !!}</div>
    
  </div>


  @if(count($tour->tourImages) > 0)
    <div class="row my-margin-top-19" id="my-entity-images-all-formats">
      @foreach($tour->tourImages as $tourImage)
        <div class="col-md-6 col-lg-4 my-padding-bottom-19 my-entity-image my-tour-image">
          <figure class="my-padding-bottom-12 text-center my-entity-figure my-tour-figure">
            <img src="{!! Storage::url($tourImage['image_path']) !!}" class="my-margin-bottom-12">

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

    <div class="row" id="my-entity-images-landscape">
    </div>

    <div class="row" id="my-entity-images-portrait">
    </div>
  @endif

  
  <div class="d-flex flex-wrap my-margin-top-19">
    <div class="my-padding-right-8 my-padding-bottom-8">
      <a href="{!! route('tours.index') !!}" class="btn btn-sm btn-outline-dark">
        <i class="far fa-arrow-alt-circle-left my-margin-right-12"></i>
        <span>Back to list of tours</span>
      </a>
    </div>
    
    @if (Auth::check() && Auth::user()->hasAdminRights())
      <div class="my-padding-bottom-8">
        <a href="{!! route('tours.edit', $tour->id) !!}" class="btn btn-sm btn-outline-primary">
          <i class="far fa-edit my-margin-right-12"></i>
          <span>Edit</span>
        </a>
      </div>
    @endif
  </div>

@endsection
