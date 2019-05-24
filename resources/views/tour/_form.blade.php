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
      <label for="tour_price">Price:</label>   
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
          <input 
          id="tour_price"
          type="number" 
          class="form-control" 
          name="price"
          value="{!! old ('label',isset($tour)?$tour['price']:NULL) !!}" > 
    </div>
  </div>

  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
            <label for="tour_number_of_day">Number_of_day:</label> 
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
     
          <input 
          id="tour_number_of_day"
          type="text" 
          class="form-control" 
          name="number_of_day"
          value="{!! old ('label',isset($tour)?$tour['number_of_day']:NULL) !!}" >  
    </div>
  </div>

  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
            <label for="tour_number_of_night">Number_of_night:</label> 
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
  
        <input 
          id="tour_number_of_night"
          type="text" 
          class="form-control" 
          name="number_of_night"
          value="{!! old ('label',isset($tour)?$tour['number_of_night']:NULL) !!}" >   
      </div>
    </div>
  </div>

  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
            <label for="tour_desciption">Desciption:</label>  
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
       
      <input 
          id="desciption"
          type="text" 
          class="form-control" 
          name="desciption"
          value="{!! old ('label',isset($tour)?$tour['desciption']:NULL) !!}" > 
      </div>
    </div>
    
    <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="destination_id">Destination:<label>
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <select name="destination_id" class="form-control" id="destination_id">
        <option value="">Choose destination:</option>
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