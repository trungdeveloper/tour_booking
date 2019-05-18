@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.indexHeader',
    ['title' => "Countries", 'route' => route('countries.create'), 'buttonLabel' => "Add a new country"]
  )

@endsection


@section('content')

  <div class="row">

    @foreach($countries as $country)

      <div class="col-md-6 col-lg-4 my-padding-bottom-19 my-filter-object my-country">
        <div class="my-frame">
          <div class="my-padding-bottom-12 my-filter-target">
            {!! $country["label"] !!}
          </div>
          
          <div class="d-flex flex-wrap">

            <div class="my-padding-right-8 my-padding-bottom-8">
              <a href="{!! route('countries.show', $country["id"]) !!}" class="btn btn-sm btn-outline-dark">
                <i class="fas fa-eye my-margin-right-12"></i>
                <span>Detail</span>
              </a>
            </div>
            
            <div class="my-padding-right-8 my-padding-bottom-8">
              <a href="{!! route('countries.edit', $country["id"]) !!}" class="btn btn-sm btn-outline-primary">
                <i class="far fa-edit my-margin-right-12"></i>
                <span>Edit</span>
              </a>
            </div>

            <div class="my-padding-bottom-8">
              <button
                class="btn btn-sm btn-danger my-country-delete"
                data-token="{!! csrf_token() !!}"
                data-url="{!! route('countries.destroy', $country['id']) !!}"
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