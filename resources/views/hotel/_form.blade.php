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
                  isset($hotel) && $hotel['destination_id'] == $destination['id'] ? 'selected' : NULL )
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
      <label for="hotel_address">Hotel address:</label>
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <textarea
        rows="4" 
        id="hotel_address"
        class="form-control"
        name="address"
      >{!! old ('label',isset($hotel)?$hotel['address']:NULL) !!}</textarea>
    </div>
  </div>


  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="hotel_phone">Phone:</label>   
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <input 
        id="hotel_phone"
        type="tel" 
        class="form-control" 
        name="phone"
        value="{!! old ('label',isset($hotel)?$hotel['phone']:NULL) !!}"
      > 
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
        value="{!! old ('label',isset($hotel)?$hotel['email']:NULL) !!}"
      >
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
        value="{!! old ('label',isset($hotel)?$hotel['website']:NULL) !!}"
      > 
      </div>
    </div>
  </div>
  

  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="hotel_description">Description:</label>  
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
       
      <textarea
        rows="4"
        id="hotel_description"
        class="form-control" 
        name="description"
      >{!! old ('label',isset($hotel)?$hotel['description']:NULL) !!}</textarea> 
    </div>
  </div>


  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="hotel_rating">Rating:</label>  
    </div>

    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <select id="hotel_rating" name="rating" class="form-control fas">
        @foreach (range(1, 5) as $i)
          <option
            class="far"
            value="{!! $i !!}"
            
            {!!
                old (
                  'destination_id',
                  isset($hotel) && $hotel['rating'] == $i ? 'selected' : NULL
                )
            !!}
          >
            
            @foreach (range(1, $i) as $j)
              &#xf005;&nbsp;
            @endforeach

          </option>
        @endforeach
      </select>
    </div>

  </div>


  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="hotel_price">Price:</label>  
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <input 
        id="hotel_price"
        type="number" 
        class="form-control" 
        name="price"
        value="{!! old ('label',isset($hotel)?$hotel['price']:NULL) !!}"
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