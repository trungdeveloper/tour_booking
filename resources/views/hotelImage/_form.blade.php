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

  @if($hotelImage['id'] != NULL)
    @method('PATCH')
    <input type="hidden" name="id" value="{!! $hotelImage['id'] !!}">

    <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="image_path_name">Image:</label>
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <img src="{!! Storage::url($hotelImage['image_path']) !!}">
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
          name="image_path[]"
          multiple="true" 
      >
    </div>
  </div>
    
  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="image_hotel_id">Hotel Name:<label>
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <select name="hotel_id" class="form-control" id="hotel_id">
        @foreach ($hotels as $hotel)
          <option
            value="{!! $hotel['id'] !!}"
            {!!
                old (
                  'hotel_id',
                  isset($hotelImage) && $hotelImage['hotel_id'] == $hotel['id'] ? 'selected' : NULL )
            !!}
          >
            {!! $hotel['name'] !!}
          </option>
        @endforeach

      </select>
    </div>
  </div>
  
  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="image_is_main">Is main:</label>
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <input 
          id="image_is_main"
          type="checkbox"
          name="is_main"
          @if(isset($hotelImage)&& $hotelImage->is_main)
            checked="checked"
          @endif
          value="1" >
    </div>
  </div>

  <div class="row">
    <div class="col-md-3 col-lg-4"></div>

    <div class="col-md-9 col-lg-8">
      <a href="{!! route('hotelImages.index') !!}" class="btn btn-sm btn-outline-dark my-padding-right-8">
        <i class="far fa-arrow-alt-circle-left my-margin-right-12"></i>
        <span>Back to list of Hotel Images</span>
      </a>

      <button type="submit" class="btn btn-sm btn-success">
        <i class="fas fa-check-circle my-margin-right-12"></i>
        <span>Save</span>
      </button>

    </div>
  </div>

</form>