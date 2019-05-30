@extends('_layouts.app')

@section('content')

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      @foreach(mySlideHelperWelcomePage() as $slide)
        
        @if($loop->first)
          <li 
            data-target="#carouselExampleIndicators"
            data-slide-to="{!! $loop->index !!}"
            class="active"
          ></li>
        
        @else
          <li 
            data-target="#carouselExampleIndicators"
            data-slide-to="{!! $loop->index !!}"
          ></li>
        
        @endif
        
      @endforeach
    </ol>
    
    <div class="carousel-inner">
      @foreach(mySlideHelperWelcomePage() as $slide)
        
        @if($loop->first)
          <div class="carousel-item active">
            <img class="d-block w-100" style="height: 550px" src="{!! $slide['url'] !!}">
            
            <div class="carousel-caption d-none d-md-block bg-white text-dark">
              <h5 class="font-weight-bold">{!! strtoupper($slide['title']) !!}</h5>
              <p class="font-italic">{!! $slide['text'] !!}</p>
            </div>
          </div>
        
        @else
          <div class="carousel-item">
            <img class="d-block w-100" style="height: 550px" src="{!! $slide['url'] !!}">
            
            <div class="carousel-caption d-none d-md-block bg-white text-dark">
              <h5 class="font-weight-bold">{!! strtoupper($slide['title']) !!}</h5>
              <p class="font-italic">{!! $slide['text'] !!}</p>
            </div>
          </div>
        
        @endif

      @endforeach
    </div>
    
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div><!-- end carousel -->

  <!-- Address and form send message -->
  <div class="row">
    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 ">

      <div class="col">
        <i class="fas fa-envelope-open-text"> &emsp; tourInfor@gmai.com</i>
      </div>
      <div class="col">
        <i class="fas fa-phone-square">&emsp; +84 396 875 521</i>
      </div>
      <div class="col">
        <i class="fas fa-map-signs">&emsp; 99 To Hien Thanh, Da Nang City</i>
      </div>
      <!-- <div class="col">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.110336097427!2d108.24146331400803!3d16.059763193959313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142177f2ced6d8b%3A0xeac35f2960ca74a4!2zOTkgVMO0IEhp4bq_biBUaMOgbmgsIFBoxrDhu5tjIE3hu7ksIFPGoW4gVHLDoCwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1559196383908!5m2!1svi!2s" width="350" height="330" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div> -->
    </div>

    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
      <h1>Contact Us</h1>
        <hr>
        <form action="" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label name="email">Email:</label>
                <input id="email" name="email" class="form-control" placeholder="Email">
            </div>

            <div class="form-group">
                <label name="subject">Subject:</label>
                <input id="subject" name="subject" class="form-control" placeholder="Subject">
            </div>

            <div class="form-group">
                <label name="message">Message:</label>
                <textarea id="message" name="message" class="form-control" placeholder="Type your message here..."></textarea>
            </div>

            <input type="submit" value="Send Message" class="btn btn-success">
        </form>
    </div>
  </div>

@endsection
