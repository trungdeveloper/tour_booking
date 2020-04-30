@if($errors->any())
  <div class="alert alert-danger">
    @foreach ($errors->all() as $error)
      <div>{!! $error !!}</div>
    @endforeach
  </div>
@endif


<form
  action="{!! $action !!}"
  method="post"
  enctype="multipart/form-data"
  class="my-margin-top-40"
>
  @csrf

  @if($tourImage['id'] != NULL)
    @method('PATCH')
    <input type="hidden" name="id" value="{!! $tourImage['id'] !!}">
    <input type="hidden" name="tour_id" value="{!! $tourImage['tour_id'] !!}">
    <input type="hidden" name="is_main" value="{!! $tourImage['is_main'] !!}">

    <div class="row my-padding-bottom-19">
      <div class="col-md-3 col-lg-4 my-padding-bottom-8">
        <label for="image_path_name">Current image:</label>
      </div>
      
      <div class="col-md-9 col-lg-8 my-padding-bottom-8">
        <img src="{!! Storage::url($tourImage['image_path']) !!}">
      </div>
    </div>

  @endif 

  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="image_path_name">Image Path:</label>
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <input 
          id="image_path_name"
          type="file"
          class="form-control"
          name="image_path"
      >
    </div>
  </div>

  <div class="row">
    <div class="col-md-3 col-lg-4"></div>

    <div class="col-md-9 col-lg-8">
      <a
        href="{!! route('tours.show', $tourImage->tour_id) !!}"
        class="btn btn-sm btn-outline-dark my-padding-right-8"
      >
        <i class="far fa-arrow-alt-circle-left my-margin-right-12"></i>
        <span>Back to <strong>{!! $tourImage->tour->name !!}</strong></span>
      </a>

      <button type="submit" class="btn btn-sm btn-success">
        <i class="fas fa-check-circle my-margin-right-12"></i>
        <span>Save</span>
      </button>

    </div>
  </div>

</form>