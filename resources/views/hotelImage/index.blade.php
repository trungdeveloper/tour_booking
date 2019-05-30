@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.indexHeader',
    ['title' => "Hotel Images", 'route' => route('hotelImages.create'), 'buttonLabel' => "Add an image for hotel"]
  )

@endsection


@section('content')

  @foreach($hotels as $hotel)

    @if (count($hotel->hotelImages) > 0)

      <div class="my-hotel">

        <h4 class="my-margin-bottom-19 my-margin-top-40 my-border-bottom">
          <strong>
            <em>{!! $hotel->name !!}</em>
          </strong>
        </h4>


        <div class="row">
        
          @foreach($hotel->hotelImages as $hotelImage)

            <div class="col-md-6 col-lg-4 my-padding-bottom-19 my-filter-object my-hotelImage">
              <div class="my-frame">
                <div class="my-padding-bottom-12 my-filter-target">
                  <img src="{!! Storage::url($hotelImage['image_path']) !!}">
                </div>
                
                <div class="d-flex flex-wrap">

                  <div class="my-padding-right-8 my-padding-bottom-8">
                    <a href="{!! route('hotelImages.show', $hotelImage['id']) !!}" class="btn btn-sm btn-outline-dark">
                      <i class="fas fa-eye my-margin-right-12"></i>
                      <span>Detail</span>
                    </a>
                  </div>
                  
                  <div class="my-padding-right-8 my-padding-bottom-8">
                    <a href="{!! route('hotelImages.edit', $hotelImage['id']) !!}" class="btn btn-sm btn-outline-primary">
                      <i class="far fa-edit my-margin-right-12"></i>
                      <span>Edit</span>
                    </a>
                  </div>

                  <div class="my-padding-bottom-8">
                    <button
                      class="btn btn-sm btn-danger my-hotelImage-delete"
                      data-token="{!! csrf_token() !!}"
                      data-url="{!! route('hotelImages.destroy', $hotelImage['id']) !!}"
                    >
                      <i class="far fa-trash-alt my-margin-right-12"></i>
                      <span>Delete</span>
                    </button>
                  </div>

                </div>
              </div>
            </div>

          @endforeach

        </div>

      </div>

    @endif

  @endforeach

@endsection