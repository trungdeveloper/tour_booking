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
>
  @csrf

  @if($tour['id'] != NULL)
    @method('PATCH')
    <input type="hidden" name="id" value="{!! $tour['id'] !!}">
  @endif 

  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="tour_name">Tour name:</label>
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <input 
          id="tour_name"
          type="text"
          class="form-control"
          name="name"
          value="{!! old ('label',isset($tour)?$tour['name']:NULL) !!}" >
    </div>
  </div>
    
  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="destination_id">Destination:<label>
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <select name="destination_id" class="form-control" id="destination_id">
        @foreach ($destinations as $destination)
          <option
            value="{!! $destination['id'] !!}"
            {!!
                old (
                  'destination_id',
                  isset($tour) && $tour['destination_id'] == $destination['id'] ? 'selected' : NULL )
            !!}
          >
            {!! $destination['label'] !!}
          </option>
        @endforeach

      </select>
    </div>
  </div>

  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="tour_description">Description:</label>  
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <textarea
        rows="4"
        id="tour_description"
        name="description"
        class="form-control" 
      >{!! old ('label',isset($tour)?$tour['description']:NULL) !!}</textarea>
    </div>
  </div>

  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
            <label for="tour_number_of_days">Number of days:</label> 
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
     
          <input 
          id="tour_number_of_days"
          type="number" 
          class="form-control" 
          name="number_of_days"
          value="{!! old ('label',isset($tour)?$tour['number_of_days']:NULL) !!}" >  
    </div>
  </div>

  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
            <label for="tour_number_of_nights">Number of nights:</label> 
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
  
        <input 
          id="tour_number_of_nights"
          type="number" 
          class="form-control" 
          name="number_of_nights"
          value="{!! old ('label',isset($tour)?$tour['number_of_nights']:NULL) !!}" >   
      </div>
    </div>
  </div>

  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="tour_price">Price:</label>   
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <input 
        id="tour_price"
        type="number" 
        class="form-control" 
        name="price"
        value="{!! old ('label',isset($tour)?$tour['price']:NULL) !!}"
      > 
    </div>
  </div>

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

  <div class="row">
    <div class="col-md-3 col-lg-4"></div>

    <div class="col-md-9 col-lg-8">
      <a href="{!! route('tours.index') !!}" class="btn btn-sm btn-outline-dark my-padding-right-8">
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