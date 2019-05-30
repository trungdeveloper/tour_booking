   
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
  @endif 
  
  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="image_path">Image: <label>
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <input
        id="image_path"
        type="file"
        class="form-control"
        name="image_path"
        value="{!! old ('image_path',isset($tourImage)?$tourImage['image_path']:NULL) !!}"
      >
    </div>
  </div>


  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="tourImage">Tour:<label>
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <select name="tour_id" class="form-control" id="tour_id">
        
        @foreach ($tours as $tour)
          <option
            value="{!! $tour['id'] !!}"
            {!!
                old (
                  'tour_id',
                  isset($tourImage) && $tourImage['tour_id'] == $tour['id'] ? 'selected' : NULL )
            !!}
          >
            {!! $tour['name'] !!}
          </option>
        @endforeach

      </select>
    </div>
  </div>
  

  <div class="row my-padding-bottom-19">
      <div class="col-md-3 col-lg-4 my-padding-bottom-8">
        <label for="tourImage">Is Main:<label>
      </div>
      
      <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <input 
              id="image_is_main"
              type="checkbox"
              name="is_main"
              @if(isset($tourImage)&& $tourImage->is_main)
                checked="checked"
              @endif
              value="1" >
      </div>
    </div>
  </div>

  <!-- button Save -->
  <div class="row">
    <div class="col-md-3 col-lg-4"></div>

    <div class="col-md-9 col-lg-8">
      <a href="{!! route('tourImages.index') !!}" class="btn btn-sm btn-outline-dark my-padding-right-8">
        <i class="far fa-arrow-alt-circle-left my-margin-right-12"></i>
        <span>Back to list of tours</span>
      </a>

      <button type="submit" class="btn btn-sm btn-success">
        <i class="fas fa-check-circle my-margin-right-12"></i>
        <span>Save</span>
      </button>

    </div>
  </div>

</form>
