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

  @if($service['id'] != NULL)
    @method('PATCH')
    <input type="hidden" name="id" value="{!! $service['id'] !!}">
  @endif 
  
  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="service_label">Label:<label>
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <input
        id="service_label"
        type="text"
        class="form-control"
        name="label"
        value="{!! old ('label',isset($service)?$service['label']:NULL) !!}"
      >
    </div>
  </div>
  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="service_price">Price:<label>
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <input
        id="service_price"
        type="number"
        class="form-control"
        name="price"
        value="{!! old ('price',isset($service)?$service['price']:NULL) !!}"
      >
    </div>
  </div>


  <!-- button Save -->
  <div class="row">
    <div class="col-md-3 col-lg-4"></div>

    <div class="col-md-9 col-lg-8">
      <a href="{!! route('services.index') !!}" class="btn btn-sm btn-outline-dark my-padding-right-8">
        <i class="far fa-arrow-alt-circle-left my-margin-right-12"></i>
        <span>Back to list of services</span>
      </a>

      <button type="submit" class="btn btn-sm btn-success">
        <i class="fas fa-check-circle my-margin-right-12"></i>
        <span>Save</span>
      </button>
    </div>
  </div>

</form>