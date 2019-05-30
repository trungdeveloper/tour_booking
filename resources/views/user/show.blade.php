@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.showHeader',
    ['title' => $user->fullName()]
  )

@endsection


@section('content')

  <div class="d-none my-margin-bottom-19" id="my-user-discard-picture-status"></div>


  <div class="my-frame">

    <div class="row">
      <div class="col-sm-6 my-padding-bottom-12">
        <div class="d-flex">
          <b class="my-padding-right-19 my-user-icon">Id</b>
          <i>{!! $user->id !!}</i>
        </div>
      </div>

      <div class="col-sm-6 my-padding-bottom-12">
        <div class="d-flex">
          <b class="my-padding-right-19">User type</b>
          <i>{!! $user->userType->label !!}</i>
        </div>
      </div>
    </div>


    <div class="d-flex align-items-start my-padding-bottom-12">

      <div class="my-padding-right-19 my-user-icon">
        <i class="fas fa-passport"></i>
      </div>

      <div>
        {!! $user->identificationType->label !!} n° {!! $user["identification_number"] !!} 
      </div>

    </div>


    <div class="row">
      <div class="col-sm-6">

        <div class="d-flex align-items-start my-padding-bottom-12">

          <div class="my-padding-right-19 my-user-icon">
            <i class="fas fa-globe-asia"></i>
          </div>

          <div class="my-user-label">
            {!! $user->country->label !!}  
          </div>

        </div>
        

        <div class="d-flex align-items-start my-padding-bottom-12">

          <div class="my-padding-right-19 my-user-icon">
            <i class="fas fa-birthday-cake"></i>
          </div>

          <div class="my-user-label">
            {!! $user->date_of_birth !!}  
          </div>

        </div>


        <div class="d-flex align-items-start my-padding-bottom-12">

          <div class="my-padding-right-19 my-user-icon">
            <i class="fas fa-phone"></i>
          </div>

          <div class="my-word-break my-user-label">
            {!! $user->phone !!}  
          </div>

        </div>


        <div class="d-flex align-items-start my-padding-bottom-12">

          <div class="my-padding-right-19 my-user-icon">
            <i class="fas fa-at"></i>
          </div>

          <div class="my-word-break my-user-label">
            {!! $user->email !!}  
          </div>

        </div>

      </div>


      <div class="col-sm-6">

        <div class="d-flex align-items-start my-padding-bottom-12">

          <div class="my-padding-right-19 my-user-icon">
            <i class="fas fa-map-signs"></i>
          </div>

          <div class="my-user-label">
            <i>{!! str_replace("\n","<br>", $user->address) !!}</i>
          </div>

        </div>
      
      </div>

    </div>

    
    <div class="d-flex flex-wrap">

      <div class="my-padding-right-8 my-padding-bottom-8">
        <a href="{!! route('users.index') !!}" class="btn btn-sm btn-outline-dark">
          <i class="far fa-arrow-alt-circle-left my-margin-right-12"></i>
          <span>Back to list of users</span>
        </a>
      </div>

      <div class="my-padding-right-8 my-padding-bottom-8">
        <a href="{!! route('users.edit', $user["id"]) !!}" class="btn btn-sm btn-outline-primary">
          <i class="far fa-edit my-margin-right-12"></i>
          <span>Edit</span>
        </a>
      </div>

    </div>
  </div>

@endsection