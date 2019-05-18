<!doctype html>
<html lang="en">

  <head>
    <base href="{{asset('')}}">

    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Passerelles Numériques - Tour</title>

    <!-- Favicon -->
    <link rel="icon" href="{{URL::asset('images/pn-logo.png')}}">

    <!-- Stylesheets -->
    @include('_layouts.stylesheets')

  </head>


  <body>

    <section class="row">
      <aside class="col-12 col-md-3 bg-dark">
        @include('_layouts.aside')
      </aside>

      <main class="col-12 col-md-9 bg-light">
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