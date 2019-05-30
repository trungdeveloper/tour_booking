<nav class="navbar navbar-expand-md navbar-dark py-2">

  <div class="d-md-none d-flex align-items-start justify-content-between flex-fill">

    <div class="d-flex flex-wrap align-items-start">

      <a href="{!! url('/') !!}" class="my-padding-bottom-8 my-padding-right-40">
        <div class="d-flex align-items-start">
          <div class="my-margin-right-19 text-center my-sidebar-action-icon">
            <i class="fas fa-home my-padding-left-4 my-padding-right-4"></i>
          </div>
          
          <div>
            <strong>
              <em>HOME</em>
            </strong>
          </div>
        </div>
      </a>


      @auth
        
        <a href="{!! url('/logout') !!}" class="my-padding-bottom-8 my-padding-right-40">
          <div class="d-flex align-items-start">
            <div class="my-margin-right-19 text-center my-sidebar-action-icon bg-danger">
              <i class="fas fa-user-slash text-light my-padding-left-4 my-padding-right-4"></i>
            </div>
            
            <div>
              Logout
            </div>
          </div>
        </a>

        <a href="{!! route('users.edit', Auth::id()) !!}" class="my-padding-bottom-8 my-padding-right-40">
          <div class="d-flex align-items-start">
            <div class="my-margin-right-19 text-center my-sidebar-action-icon bg-primary">
              <i class="fas fa-user-edit text-light my-padding-left-4 my-padding-right-4"></i>
            </div>
            
            <div>
              Edit your account
            </div>
          </div>
        </a>


      @else
        
        <a href="{!! url('/login') !!}" class="my-padding-bottom-8 my-padding-right-40">
          <div class="d-flex align-items-start">
            <div class="my-margin-right-19 text-center my-sidebar-action-icon bg-info">
              <i class="far fa-user-circle text-light my-padding-left-4 my-padding-right-4"></i>
            </div>
            
            <div>
              Login
            </div>
          </div>
        </a>

        <a href="{!! route('users.create') !!}" class="my-padding-bottom-8 my-padding-right-40">
          <div class="d-flex align-items-start">
            <div class="my-margin-right-19 text-center my-sidebar-action-icon bg-success">
              <i class="fas fa-user-plus text-light my-padding-left-4 my-padding-right-4"></i>
            </div>
            
            <div>
              Register
            </div>
          </div>
        </a>


      @endauth

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

  </div>


  <div class="collapse navbar-collapse" id="my-navbar-content">
    
    <ul class="nav navbar-nav d-flex flex-column">
      
      <li class="d-none d-md-block">
        <a href="{!! url('/') !!}">
          <div class="d-flex align-items-start">
            <div class="my-margin-right-19 text-center my-sidebar-action-icon">
              <i class="fas fa-home my-padding-left-4 my-padding-right-4"></i>
            </div>
            
            <div class="my-sidebar-action-label">
              <strong>
                <em>HOME</em>
              </strong>
            </div>
          </div>
        </a>
      </li>


      @auth
      
        <li class="d-none d-md-block my-margin-top-8">
          <a href="{!! url('/logout') !!}">
            <div class="d-flex align-items-start">
              <div class="my-margin-right-19 text-center bg-danger my-sidebar-action-icon">
                <i class="fas fa-user-slash my-padding-left-4 my-padding-right-4 text-light"></i>
              </div>
              
              <div class="my-sidebar-action-label">
                Logout
              </div>
            </div>
          </a>
        </li>

        <li class="d-none d-md-block my-margin-top-8">
          <a href="{!! route('users.edit', Auth::id()) !!}">
            <div class="d-flex align-items-start">
              <div class="my-margin-right-19 text-center bg-primary my-sidebar-action-icon">
                <i class="fas fa-user-edit my-padding-left-4 my-padding-right-4 text-light"></i>
              </div>
              
              <div class="my-sidebar-action-label">
                Edit your account
              </div>
            </div>
          </a>
        </li>

      
      @else
      
        <li class="d-none d-md-block my-margin-top-8">
          <a href="{!! url('/login') !!}">
            <div class="d-flex align-items-start">
              <div class="my-margin-right-19 text-center bg-info my-sidebar-action-icon">
                <i class="far fa-user-circle my-padding-left-4 my-padding-right-4 text-light"></i>
              </div>
              
              <div class="my-sidebar-action-label">
                Login
              </div>
            </div>
          </a>
        </li>

        <li class="d-none d-md-block my-margin-top-8">
          <a href="{!! route('users.create') !!}">
            <div class="d-flex align-items-start">
              <div class="my-margin-right-19 text-center bg-success my-sidebar-action-icon">
                <i class="fas fa-user-plus my-padding-left-4 my-padding-right-4 text-light"></i>
              </div>
              
              <div class="my-sidebar-action-label">
                Register
              </div>
            </div>
          </a>
        </li>


      @endauth


      <div class="d-flex flex-wrap flex-md-column my-padding-top-19 my-margin-top-19 my-border-top">

        @foreach(myLayoutHelperSidebarActions() as $action)
          
          @if($action['mayBeDisplayed'])
            <li class="my-margin-top-8">
              <a href="{!! url($action['url']) !!}">
                <div class="d-flex align-items-start">
                  <div class="my-margin-right-19 text-center my-sidebar-action-icon">
                    <i class="fas fa-sitemap my-padding-left-4 my-padding-right-4"></i>
                  </div>
                  
                  <div class="my-padding-right-19 my-sidebar-action-label">
                    {!! $action['label'] !!}
                  </div>
                </div>
              </a>
            </li>
          @endif
          
        @endforeach

      </div>

    </ul>

  </div>

</nav>