@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.indexHeader',
    ['title' => "Hotels", 'route' => route('hotels.create'), 'buttonLabel' => "Add a hotel"]
  )

@endsection


@section('content')

  @foreach($destinations as $destination)

    @if (count($destination->hotels) > 0)

      <div class="my-destination">

        <h4 class="my-margin-bottom-19 my-margin-top-40 my-border-bottom">
          <strong>
            <em>{!! $destination->label !!}</em>
          </strong>
        </h4>


        <div class="row">
        
          @foreach($destination->hotels as $hotel)

            <div class="col-md-6 col-lg-4 my-padding-bottom-19 my-filter-object my-hotel">
              <div class="my-frame">
                <div class="my-padding-bottom-12 my-filter-target">
                  {!! $hotel["name"] !!}
                </div>
                
                <div class="d-flex flex-wrap">

                  <div class="my-padding-right-8 my-padding-bottom-8">
                    <a href="{!! route('hotels.show', $hotel["id"]) !!}" class="btn btn-sm btn-outline-dark">
                      <i class="fas fa-eye my-margin-right-12"></i>
                      <span>Detail</span>
                    </a>
                  </div>
                  
                  <div class="my-padding-right-8 my-padding-bottom-8">
                    <a href="{!! route('hotels.edit', $hotel["id"]) !!}" class="btn btn-sm btn-outline-primary">
                      <i class="far fa-edit my-margin-right-12"></i>
                      <span>Edit</span>
                    </a>
                  </div>

                  <div class="my-padding-bottom-8">
                    <button
                      class="btn btn-sm btn-danger my-hotel-delete"
                      data-token="{!! csrf_token() !!}"
                      data-url="{!! route('hotels.destroy', $hotel['id']) !!}"
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