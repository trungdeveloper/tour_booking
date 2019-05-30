@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.indexHeader',
    ['title' => "Customer messages", 'route' => null, 'buttonLabel' => null, 'noDisplay' => true]
  )

@endsection


@section('content')

  @foreach($customerMessages as $customerMessage)

    <div
      @unless($loop->first)
        class="my-margin-top-19 my-padding-top-19 my-border-top"
      @endunless
    >

      <div class="d-flex align-items-start my-padding-bottom-12">
        <div class="my-padding-right-19 my-customer-message-icon">
          <i class="fas fa-user"></i>
        </div>

        <div>{!! $customerMessage->name !!}</div>
      </div>

      <div class="d-flex align-items-start my-padding-bottom-12">
        <div class="my-padding-right-19 my-customer-message-icon">
          <i class="fas fa-at"></i>
        </div>

        <div>{!! $customerMessage->email !!}</div>
      </div>

      <div class="d-flex align-items-start my-padding-bottom-12">

        <div class="my-padding-right-19 my-customer-message-icon">
          <i class="fas fa-align-justify"></i>
        </div>

        <div>
          <i>{!! str_replace("\n","<br>", $customerMessage->message) !!}</i>
        </div>

      </div>


      @if (Auth::check() && Auth::user()->hasAdminRights())
        <div class="d-flex flex-wrap">

          <div class="my-padding-right-8 my-padding-bottom-8">
            <a href="mailto:{!! $customerMessage->email !!}" class="btn btn-sm btn-outline-primary">
              <div class="d-flex align-items-center">
                <div class="my-margin-right-12 my-action-button-icon">
                  <i class="fas fa-reply"></i>
                </div>

                <div class="my-action-button-label text-left">
                  Reply
                </div>
              </div>
            </a>
          </div>

          <div class="my-padding-bottom-8">
            <button
              class="btn btn-sm btn-danger my-dish-delete"
              data-token="{!! csrf_token() !!}"
              data-url="{!! route('customerMessages.destroy', $customerMessage['id']) !!}"
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
      
        </div>
      @endif
    
    </div>

  @endforeach

@endsection