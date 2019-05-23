@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.indexHeader',
    ['title' => "Users", 'route' => route('users.create'), 'buttonLabel' => "Add a user"]
  )

@endsection


@section('content')

  @foreach($userTypes as $userType)

    @if (count($userType->users) > 0)

      <div class="my-user-type">

        <h4 class="my-margin-bottom-19 my-margin-top-40 my-border-bottom">
          <strong>
            <em>{!! $userType->label !!}</em>
          </strong>
        </h4>


        <div class="row">
        
          @foreach($userType->users as $user)

            <div class="col-md-6 col-lg-4 my-padding-bottom-19 my-filter-object my-user">
              <div class="my-frame">
                <div class="my-padding-bottom-12 my-filter-target">
                  {!! $user["title"]["label"].' '.$user["first_name"].' '.$user["middle_name"].' '.$user["last_name"] !!}
                </div>
                
                <div class="d-flex flex-wrap">

                  <div class="my-padding-right-8 my-padding-bottom-8">
                    <a href="{!! route('users.show', $user["id"]) !!}" class="btn btn-sm btn-outline-dark">
                      <i class="fas fa-eye my-margin-right-12"></i>
                      <span>Detail</span>
                    </a>
                  </div>
                  
                  <div class="my-padding-right-8 my-padding-bottom-8">
                    <a href="{!! route('users.edit', $user["id"]) !!}" class="btn btn-sm btn-outline-primary">
                      <i class="far fa-edit my-margin-right-12"></i>
                      <span>Edit</span>
                    </a>
                  </div>

                  <div class="my-padding-bottom-8">
                    <button
                      class="btn btn-sm btn-danger my-user-delete"
                      data-token="{!! csrf_token() !!}"
                      data-url="{!! route('users.destroy', $user['id']) !!}"
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