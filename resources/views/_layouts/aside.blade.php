<nav class="navbar navbar-expand-md navbar-dark bg-dark py-2">

  <div class="d-md-none">
    <a href="{!! url('/') !!}">
      <i class="fas fa-home my-margin-right-12"></i>
      
      <strong>
        <em>HOME</em>
      </strong>
    </a>
  </div>
  
  <button
    class="navbar-toggler"
    type="button"
    data-toggle="collapse"
    data-target="#my-navbar-content"
    aria-controls="my-navbar-content"
    aria-expanded="false"
    aria-label="Toggle navigation"
  >
    <span class="navbar-toggler-icon">
      <i class="fas fa-sitemap"></i>
    </span>
  </button>


  <div class="collapse navbar-collapse" id="my-navbar-content">
    
    <ul class="nav navbar-nav d-flex flex-column">
      
      <li class="d-none d-md-block">
        <a href="{!! url('/') !!}">
          <i class="fas fa-home my-margin-right-12"></i>
          
          <strong>
            <em>HOME</em>
          </strong>
        </a>
      </li>

      <li class="my-margin-top-19">
        <a href="{!! url('countries') !!}">
          <i class="fas fa-sitemap my-margin-right-12"></i>
          <span>Countries</span>
        </a>
      </li>

      <li>
        <a href="{!! url('destinations') !!}">
          <i class="fas fa-sitemap my-margin-right-12"></i>
          <span>Destinations</span>
        </a>
      </li>

      <li>
        <a href="{!! url('identificationTypes') !!}">
          <i class="fas fa-sitemap my-margin-right-12"></i>
          <span>Identification types</span>
        </a>
      </li>

      <li>
        <a href="{!! url('services') !!}">
          <i class="fas fa-sitemap my-margin-right-12"></i>
          <span>Services</span>
        </a>
      </li>

      <li>
        <a href="{!! url('titles') !!}">
          <i class="fas fa-sitemap my-margin-right-12"></i>
          <span>Titles</span>
        </a>
      </li>

      <li>
        <a href="{!! url('userTypes') !!}">
          <i class="fas fa-sitemap my-margin-right-12"></i>
          <span>User categories</span>
        </a>
      </li>
      <li>
        <a href="{!! url('tours') !!}">
          <i class="fas fa-sitemap my-margin-right-12"></i>
          <span>Tours</span>
        </a>
      </li>

      <li>
        <a href="{!! url('users') !!}">
          <i class="fas fa-sitemap my-margin-right-12"></i>
          <span>Users</span>
        </a>
      </li>

      <li>
        <a href="{!! url('hotels') !!}">
          <i class="fas fa-sitemap my-margin-right-12"></i>
          <span>Hotels</span>
        </a>
      </li>

    </ul>

  </div>

</nav>