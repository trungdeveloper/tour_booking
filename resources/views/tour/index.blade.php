@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.indexHeader',
    [
      'title'         =>  "Tours",
      'route'         =>  route('tours.create'),
      'buttonLabel'   =>  "Add a new tour"
    ]
  )

@endsection

@section('content')
    <div class="row">
      @foreach($tours as $tour)

      <div class="col-md-6 col-lg-4 my-padding-bottom-19 my-filter-object my-tour">
        <div class="my-frame">
          <div class="my-padding-bottom-12 my-filter-target">
            {!! $tour["name"] !!}
          </div>
          <div class="my-padding-bottom-12 my-filter-target">
            {!! $tour["price"] !!}$
          </div>
          
          <div class="d-flex flex-wrap">

            <div class="my-padding-right-8 my-padding-bottom-8">
              <a href="{!! route('tours.show', $tour['id']) !!}" class="btn btn-sm btn-outline-dark">
                <i class="fas fa-eye my-margin-right-12"></i>
                <span>Detail</span>
              </a>
            </div>
            
            <div class="my-padding-right-8 my-padding-bottom-8">
              <a href="{!! route('tours.edit', $tour['id']) !!}" class="btn btn-sm btn-outline-primary">
                <i class="far fa-edit my-margin-right-12"></i>
                <span>Edit</span>
              </a>
            </div>

            <div class="my-padding-bottom-8">
              <button
                class="btn btn-sm btn-danger my-tour-delete"
                data-token="{!! csrf_token() !!}"
                data-url="{!! route('tours.destroy', $tour['id']) !!}"
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