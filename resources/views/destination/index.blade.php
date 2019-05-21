@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.indexHeader',
    [
      'title'       => "Destination",
      'route'       => route('destinations.create'),
      'buttonLabel' => "Add a new destination"
    ]
  )

@endsection


@section('content')

  <div class="row">

    @foreach($destination as $destina)

      <div class="col-md-6 col-lg-4 my-padding-bottom-19 my-filter-object my-destination">
        <div class="my-frame">
          <div class="my-padding-bottom-12 my-filter-target">
            {!! $destina["label"] !!}
          </div>
          
          <div class="d-flex flex-wrap">

            <div class="my-padding-right-8 my-padding-bottom-8">
              <a href="{!! route('destinations.show', $destina["id"]) !!}" class="btn btn-sm btn-outline-dark">
                <i class="fas fa-eye my-margin-right-12"></i>
                <span>Detail</span>
              </a>
            </div>
            
            <div class="my-padding-right-8 my-padding-bottom-8">
              <a href="{!! route('destinations.edit', $destina["id"]) !!}" class="btn btn-sm btn-outline-primary">
                <i class="far fa-edit my-margin-right-12"></i>
                <span>Edit</span>
              </a>
            </div>

            <div class="my-padding-bottom-8">
              <button
                class="btn btn-sm btn-danger my-destination-delete"
                data-token="{!! csrf_token() !!}"
                data-url="{!! route('destinations.destroy', $destina['id']) !!}"
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

@endsection