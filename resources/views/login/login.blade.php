@extends('_layouts.app')


@section('header')

  @include(
    '_layouts.showHeader',
    ['title' => "Login"]
  )

@endsection


@section('content')

  @if($errors->any())
    <div class="alert alert-danger">
      @foreach ($errors->all() as $error)
        <div>{!! $error !!}</div>
      @endforeach
    </div>
  @endif


  <form action="{!! route('login.authenticate') !!}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="row my-padding-bottom-19">
      <div class="col-md-3 col-lg-4 my-padding-bottom-8">
        <label for="email">E-mail address:<label>
      </div>
      
      <div class="col-md-9 col-lg-8 my-padding-bottom-8">
        <input
          id="email"
          type="email"
          class="form-control"
          name="email"
        >
      </div>
    </div>


    <div class="row my-padding-bottom-19">
      <div class="col-md-3 col-lg-4 my-padding-bottom-8">
        <label for="password">Password:<label>
      </div>
    
      <div class="col-md-9 col-lg-8 my-padding-bottom-8">
        <input
          id="password"
          type="password"
          class="form-control"
          name="password"
        >
      </div>
    </div>


    <!-- button Save -->
    <div class="row">
      <div class="col-md-3 col-lg-4"></div>

      <div class="col-md-9 col-lg-8">
        <a
          href="{!! url('/') !!}"
          class="btn btn-sm btn-outline-dark my-margin-right-8 my-margin-bottom-8"
        >
          <i class="far fa-arrow-alt-circle-left my-margin-right-12"></i>
          <span>Back to the welcome page</span>
        </a>

        <button
          type="submit"
          class="btn btn-sm btn-success my-margin-bottom-8"
        >
          <i class="fas fa-check-circle"></i>
          <span>Login</span>
        </button>
      </div>
    </div>

  </form>

@endsection
