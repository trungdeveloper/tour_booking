@extends('_layouts.app')

@section('content')
	<div id="page-wrapper">
	    <h1><center>WELCOME TO PNV'S TOUR!</center></h1>
	</div>

	<div class="row"> 
		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 welcomeImage">
			<img src="./images/welcome.jpg" class="img-responsive" alt="Image">
		</div>
	</div>
	<div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        	<i class="fas fa-envelope-open"></i>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        	pnv@gmail.com
        </div>
        	
        </div>

        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
        	<i class="fas fa-phone">+84 396 987 863</i>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
        	<i class="fas fa-map-marker-alt">99 To Hien Thanh, Danang</i>
        </div>
    </div>
    @endsection
