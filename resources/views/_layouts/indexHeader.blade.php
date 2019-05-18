@include('_layouts.header', ['title' => $title])

<a href="{!! $route !!}" class="btn btn-sm btn-success">
  <i class="fa fa-plus-circle my-margin-right-12"></i>
  <span>{!! $buttonLabel !!}</span>
</a>

<input class="form-control my-filter my-margin-bottom-19 my-margin-top-40" type="text" placeholder="Filter...">

<div class="d-none my-margin-bottom-19" id="my-entity-delete-status"></div>
