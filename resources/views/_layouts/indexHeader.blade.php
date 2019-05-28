@include('_layouts.header', ['title' => $title])

@if (Auth::check() && Auth::user()->hasAdminRights() || isset($forceDisplay) && $forceDisplay)
  <a href="{!! $route !!}" class="btn btn-sm btn-success">
    <i class="fa fa-plus-circle my-margin-right-12"></i>
    <span>{!! $buttonLabel !!}</span>
  </a>
@endif

<input class="form-control my-filter my-margin-bottom-19 my-margin-top-40" type="text" placeholder="Filter...">

@if (Auth::check() && Auth::user()->hasAdminRights())
  <div class="d-none my-margin-bottom-19" id="my-entity-delete-status"></div>
@endif
