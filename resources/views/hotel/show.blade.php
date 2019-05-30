@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.showHeader',
    ['title' => $hotel["name"]]
  )

@endsection


@section('content')

  <div class="my-frame">

    <div class="row">
      <div class="col-sm-6 my-padding-bottom-12">
        <div class="d-flex">
          <b class="my-padding-right-19 my-hotel-icon">Id</b>
          <i>{!! $hotel->id !!}</i>
        </div>
      </div>

      <div class="col-sm-6 my-padding-bottom-12">
        <div class="d-flex">
          <b class="my-padding-right-19">Rating</b>
          
          <span>
            @foreach (range(1, 5) as $i)
              <i class="{!! $i > $hotel->rating ? 'far' : 'fas' !!} fa-star my-padding-right-4"></i>
            @endforeach
          </span>
        </div>
      </div>
    </div>


    <div class="d-flex align-items-start my-padding-bottom-12">

      <div class="my-padding-right-19 my-hotel-icon">
        <i class="fas fa-hotel"></i>
      </div>

      <div>
        {!! $hotel->name !!} 
      </div>

    </div>


    <div class="row">
      <div class="col-sm-6">

        <div class="d-flex align-items-start my-padding-bottom-12">

          <div class="my-padding-right-19 my-hotel-icon">
            <i class="fas fa-map-signs"></i>
          </div>

          <div class="my-hotel-label">
            {!! $hotel->destination->label !!}  
          </div>

        </div>
        

        <div class="d-flex align-items-start my-padding-bottom-12">
          <div class="my-padding-right-19 my-hotel-icon">
            <i class="fas fa-wifi"></i>
          </div>

          <div class="my-hotel-label">
            {!! $hotel->website !!}  
          </div>
        </div>


        <div class="d-flex align-items-start my-padding-bottom-12">
          <div class="my-padding-right-19 my-hotel-icon">
            <i class="fas fa-phone"></i>
          </div>

          <div class="my-word-break my-hotel-label">
            {!! $hotel->phone !!}  
          </div>
        </div>


        <div class="d-flex align-items-start my-padding-bottom-12">
          <div class="my-padding-right-19 my-hotel-icon">
            <i class="fas fa-at"></i>
          </div>

          <div class="my-word-break my-hotel-label">
            {!! $hotel->email !!}  
          </div>
        </div>

      </div>


      <div class="col-sm-6">
        <div class="d-flex align-items-start my-padding-bottom-12">
          <div class="my-padding-right-19 my-hotel-icon">
            <i class="fas fa-map-signs"></i>
          </div>

          <div class="my-hotel-label">
            <i>{!! str_replace("\n","<br>", $hotel->address) !!}</i>
          </div>
        </div>
      </div>


      @isset($hotel['description'])
        <div class="col-sm-6 my-padding-bottom-12">
          <div class="d-flex align-items-start">
            <div class="my-padding-right-19 my-hotel-icon">
              <i class="fas fa-info-circle"></i>
            </div>

            <div class="my-hotel-label">
              <em>{!! str_replace("\n","<br>", $hotel->description) !!}</em>
            </div>
          </div>
        </div>
      @endisset

    </div>


    <div class="text-right my-padding-bottom-12">VNĐ {!! $hotel->price !!} per night</div>
    
  </div>


  @if(count($hotel->hotelImages) > 0)
    <div class="row my-margin-top-19">
      @foreach($hotel->hotelImages as $hotelImage)
        <div class="col-md-6 col-lg-4 my-padding-bottom-19 my-hotel-image">
          <figure class="my-padding-bottom-12 text-center my-hotel-figure">
            <img src="{!! Storage::url($hotelImage['image_path']) !!}">

            @if (Auth::check() && Auth::user()->hasAdminRights())
              <figcaption class="d-flex flex-wrap justify-content-center my-margin-top-8">

                <div class="my-padding-right-8 my-padding-bottom-8">
                  <a
                    href="{!! route('hotelImages.edit', $hotelImage["id"]) !!}"
                    class="btn btn-sm btn-primary"
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
                    class="btn btn-sm btn-danger my-dish-delete"
                    data-token="{!! csrf_token() !!}"
                    data-url="{!! route('hotelImages.destroy', $hotelImage['id']) !!}"
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
      <a href="{!! route('hotels.index') !!}" class="btn btn-sm btn-outline-dark">
        <i class="far fa-arrow-alt-circle-left my-margin-right-12"></i>
        <span>Back to list of hotels</span>
      </a>
    </div>
    
    <div class="my-padding-bottom-8">
      <a href="{!! route('hotels.edit', $hotel->id) !!}" class="btn btn-sm btn-outline-primary">
        <i class="far fa-edit my-margin-right-12"></i>
        <span>Edit</span>
      </a>
    </div>
  </div>

@endsection