<!doctype html>
<html lang="en">

  <head>
    <base href="{{asset('')}}">

    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Passerelles Numériques - Tours</title>

    <!-- Favicon -->
    <link rel="icon" href="{{URL::asset('images/pn-logo.png')}}">

    <!-- Stylesheets -->
    @include('_layouts.stylesheets')

  </head>


  <body>

    <header class="d-flex align-items-center">
      <div class="my-padding-right-19">
        <a href="{!! url('/') !!}">
          <img src="{!! URL::asset('images/pn-logo.png') !!}" class="my-website-logo">
        </a>
      </div>
      
      <h4 class="d-sm-none"><strong>PN Tours</strong></h4>
      <h3 class="d-none d-sm-block d-md-none"><strong>PN Tours</strong></h3>
      <h2 class="d-none d-md-block d-lg-none"><strong>Passerelles Numériques' Tours</strong></h2>
      <h1 class="d-none d-lg-block"><strong>Passerelles Numériques' Tours</strong></h1>
    </header>

    <section class="row">
      <aside class="col-12 col-md-4 col-lg-3">
        @include('_layouts.aside')
      </aside>

      <main class="col">
        <header>
          @yield('header')
        </header>

        <article>
          @yield('content') 
        </article>
      </main>

    </section>
    
    @include('_layouts.scripts')
  </body>

</html>