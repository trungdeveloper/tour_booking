@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.indexHeader',
    ['title' => "tourImage", 'route' => route('tourImages.create'), 'buttonLabel' => "Add a Tour Image"]
  )

@endsection


@section('content')

  @foreach($tours as $tour)

    @if (count($tour->tourImages) > 0)

      <div class="my-tour">

        <h4 class="my-margin-bottom-19 my-margin-top-40 my-border-bottom">
          <strong>
            <em>{!! $tour->name !!}</em>
          </strong>
        </h4>


        <div class="row">
        
          @foreach($tour->tourImages as $tourImage)

            <div class="col-md-6 col-lg-4 my-padding-bottom-19 my-filter-object my-tour-image">
              <div class="my-frame">
                <div class="my-padding-bottom-12 my-filter-target">
                  {!! $tourImage["id"] !!}
                </div>
                
                <div class="d-flex flex-wrap">
                @isset($tourImage['image_path'])    
                  <div class="my-padding-bottom-12 my-tour-image">
                    <img src="{!! Storage::url($tourImage->image_path) !!}">
                  </div>
                 @endisset
                  <div class="my-padding-right-8 my-padding-bottom-8">
                    <a href="{!! route('tourImages.show', $tourImage['id']) !!}" class="btn btn-sm btn-outline-dark">
                      <i class="fas fa-eye my-margin-right-12"></i>
                      <span>Detail</span>
                    </a>
                  </div>
                  
                  <div class="my-padding-right-8 my-padding-bottom-8">
                    <a href="{!! route('tourImages.edit', $tourImage['id']) !!}" class="btn btn-sm btn-outline-primary">
                      <i class="far fa-edit my-margin-right-12"></i>
                      <span>Edit</span>
                    </a>
                  </div>

                  <div class="my-padding-bottom-8">
                    <button
                      class="btn btn-sm btn-danger my-tour-image-delete"
                      data-token="{!! csrf_token() !!}"
                      data-url="{!! route('tourImages.destroy', $tourImage['id']) !!}"
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