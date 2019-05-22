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

  @if($user['id'] != NULL)
    @method('PATCH')
    <input type="hidden" name="id" value="{!! $user['id'] !!}">
  @endif 
  
  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="first_name">First Name:<label>
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <input
        id="first_name"
        type="text"
        class="form-control"
        name="first_name"
        value="{!! old ('first_name',isset($user)?$user['first_name']:NULL) !!}"
      >
    </div>
  </div>

  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="middle_name">Middle Name:<label>
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <input
        id="middle_name"
        type="text"
        class="form-control"
        name="middle_name"
        value="{!! old ('middle_name',isset($user)?$user['middle_name']:NULL) !!}"
      >
    </div>
  </div>

  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="last_name">Last Name:<label>
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <input
        id="last_name"
        type="text"
        class="form-control"
        name="last_name"
        value="{!! old ('last_name',isset($user)?$user['last_name']:NULL) !!}"
      >
    </div>
  </div>


  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="user_type_id">User category:<label>
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <select name="user_type_id" class="form-control" id="user_type_id">
        
        @foreach ($userTypes as $userType)
          <option
            value="{!! $userType['id'] !!}"
            {!!
                old (
                  'user_type_id',
                  isset($user) && $user['user_type_id'] == $userType['id'] ? 'selected' : NULL )
            !!}
          >
            {!! $userType['label'] !!}
          </option>
        @endforeach

      </select>
    </div>
  </div>

  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="country_id">country:<label>
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <select name="country_id" class="form-cont  rol" id="country_id">
        
        @foreach (countries as $country)
          <option
            value="{!! $userType['id'] !!}"
            {!!
                old (
                  'country_id',
                  isset($user) && $user['country_id'] == $country['id'] ? 'selected' : NULL )
            !!}
          >
            {!! $country['label'] !!}
          </option>
        @endforeach

      </select>
    </div>
  </div>
  
  <!-- button Save -->
  <div class="row">
    <div class="col-md-3 col-lg-4"></div>

    <div class="col-md-9 col-lg-8">
      <a
        href="{!! route('users.index') !!}"
        class="btn btn-sm btn-outline-dark my-margin-right-8 my-margin-bottom-8"
      >
        <i class="far fa-arrow-alt-circle-left my-margin-right-12"></i>
        <span>Back to list of users</span>
      </a>

      <button
        type="submit"
        class="btn btn-sm btn-success {!! isset($user['image']) ? ' my-margin-right-8 ' : '' !!}my-margin-bottom-8"
      >
        <i class="fas fa-check-circle my-margin-right-12"></i>
        <span>Save</span>
      </button>

    </div>
  </div>

</form>