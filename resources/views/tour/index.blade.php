@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.indexHeader',
    ['title' => "Tours", 'route' => route('tours.create'), 'buttonLabel' => "Add a tour"]
  )

@endsection


@section('content')

  @foreach($destinations as $destination)

    @if (count($destination->tours) > 0)

      <div class="my-destination">

        <h4 class="my-margin-bottom-19 my-margin-top-40 my-border-bottom">
          <strong>
            <em>{!! $destination->label !!}</em>
          </strong>
        </h4>


        <div class="row my-entity-images-all-formats">
        
          @foreach($destination->tours as $tour)

            <div class="col-sm-6 col-lg-4 my-padding-bottom-19 my-filter-object my-entity my-tour">
              <div class="my-frame d-flex flex-wrap flex-fill align-items-start justify-content-between">

                <div class="my-padding-bottom-8 my-padding-right-19">
                  <div class="my-padding-bottom-12 my-filter-target my-entity-name">
                    <strong>{!! $tour["name"] !!}</strong>
                  </div>
    
                  <div class="my-padding-bottom-12">
                    <div class="my-entity-price">
                      VNĐ {!! $tour->price !!}
                    </div>
                  </div>
                  
                  
                  <div class="d-flex flex-wrap">

                    <div class="my-padding-right-8 my-padding-bottom-8">
                      <a 
                        href="{!! route('tours.show', $tour["id"]) !!}"
                        class="btn btn-sm btn-outline-dark"
                      >
                        <div class="d-flex align-items-center">
                          <div class="my-margin-right-12 my-action-button-icon">
                            <i class="fas fa-eye"></i>
                          </div>

                          <div class="my-action-button-label text-left">
                            Detail
                          </div>
                        </div>
                      </a>
                    </div>

                    @if (Auth::check() && Auth::user()->hasAdminRights())
                      <div class="my-padding-right-8 my-padding-bottom-8">
                        <a 
                          href="{!! route('tours.edit', $tour["id"]) !!}"
                          class="btn btn-sm btn-outline-primary"
                        >
                          <div class="d-flex align-items-center">
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
                          class="btn btn-sm btn-danger my-tour-delete"
                          data-token="{!! csrf_token() !!}"
                          data-url="{!! route('tours.destroy', $tour['id']) !!}"
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
                    @endif
                
                  </div>

                </div>


                @if(count($tour->tourImages) > 0)    
                  <div class="my-entity-image my-tour-image">
                    <img
                      src="{!! Storage::url($tour->tourImages[0]->image_path) !!}"
                      class="my-padding-bottom-8 mx-auto d-block"
                    >
                  </div>
                @endif

              </div>
            </div>

          @endforeach

        </div>


        <div class="row my-entity-images-landscape">
        </div>

        <div class="row my-entity-images-portrait">
        </div>


      </div>

    @endif

  @endforeach

@endsection