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

  @if($hotel['id'] != NULL)
    @method('PATCH')
    <input type="hidden" name="id" value="{!! $hotel['id'] !!}">
  @endif 

  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="hotel_name">Hotel name:</label>
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <input 
          id="hotel_name"
          type="text"
          class="form-control"
          name="name"
          value="{!! old ('label',isset($hotel)?$hotel['name']:NULL) !!}" >
    </div>
  </div>

  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="hotel_address">Hotel address:</label>
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <input 
          id="hotel_address"
          type="text"
          class="form-control"
          name="address"
          value="{!! old ('label',isset($hotel)?$hotel['address']:NULL) !!}" >
    </div>
  </div>

  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="hotel_phone">Phone:</label>   
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
          <input 
          id="hotel_phone"
          type="number" 
          class="form-control" 
          name="phone"
          value="{!! old ('label',isset($hotel)?$hotel['phone']:NULL) !!}" > 
    </div>
  </div>

  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
            <label for="hotel_email">Email:</label> 
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
     
          <input 
          id="hotel_email"
          type="email" 
          class="form-control" 
          name="email"
          value="{!! old ('label',isset($hotel)?$hotel['email']:NULL) !!}" >  
    </div>
  </div>

  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
            <label for="hotel_website">Website:</label> 
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
  
        <input 
          id="hotel_website"
          type="text" 
          class="form-control" 
          name="website"
          value="{!! old ('label',isset($hotel)?$hotel['website']:NULL) !!}" >   
      </div>
    </div>
  </div>

  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
            <label for="hotel_price">Price:</label>  
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
       
      <input 
          id="price"
          type="number" 
          class="form-control" 
          name="price"
          value="{!! old ('label',isset($hotel)?$hotel['price']:NULL) !!}" > 
      </div>
    </div>



    <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
        <label for="hotel_rating">Rating:</label>  
    </div>

    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
     
      <select id="rating" name="rating" class="form-control" >   
        <option value="">Choose rating:</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option> 
      </select>
    </div>

    </div>
    
    <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="hotel_number_of_nights">Number_of_night:</label> 
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
        <input 
          id="hotel_number_of_nights"
          type="text" 
          class="form-control" 
          name="number_of_nights"
          value="{!! old ('label',isset($hotel)?$hotel['number_of_nights']:NULL) !!}" >   
      </div>
    </div>

    <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="hotel_description">Description:</label>  
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
       
      <input 
          id="description"
          type="text" 
          class="form-control" 
          name="description"
          value="{!! old ('label',isset($hotel)?$hotel['description']:NULL) !!}" > 
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
                isset($hotel) && $hotel['destination_id'] == $destination['id'] ? 'selected' : NULL )
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
      <a href="{!! route('hotels.index') !!}" class="btn btn-sm btn-outline-dark my-padding-right-8">
        <i class="far fa-arrow-alt-circle-left my-margin-right-12"></i>
        <span>Back to list of hotels</span>
      </a>

      <button type="submit" class="btn btn-sm btn-success">
        <i class="fas fa-check-circle my-margin-right-12"></i>
        <span>Save</span>
      </button>

    </div>
  </div>

</form>