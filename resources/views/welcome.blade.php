@extends('_layouts.app')

@section('content')
	<div id="page-wrapper">
	    <h1><center>WELCOME TO PNV'S TOUR!</center></h1>
	</div>

	<div class="row"> 
		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 welcomeImage">
			<img src="./images/welcome.jpg" class="img-responsive" alt="Image">
		</div>

		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<center><p>ADVANCE SEARCH</p></center>
            <select class="form-control search-slt" id="exampleFormControlSelect1">
                <option>From...</option>
                <option>Example one</option>
                <option>Example one</option>
                <option>Example one</option>
                <option>Example one</option>
                <option>Example one</option>
                <option>Example one</option>
            </select>

            <center><i class="fas fa-star"></i></center>

            <select class="form-control search-slt" id="exampleFormControlSelect2">
                <option>To...</option>
                <option>Example one</option>
                <option>Example one</option>
                <option>Example one</option>
                <option>Example one</option>
                <option>Example one</option>
                <option>Example one</option>
            </select>

            <center><i class="fas fa-star"></i></center>

            <select class="form-control search-slt" id="exampleFormControlSelect3">
                <option>Select Price</option>
                <option>Example one</option>
                <option>Example one</option>
                <option>Example one</option>
                <option>Example one</option>
                <option>Example one</option>
                <option>Example one</option>
            </select>

            <center><i class="fas fa-star"></i></center>

            <select class="form-control search-slt" id="exampleFormControlSelect4">
                <option>Select Service</option>
                <option>Example one</option>
                <option>Example one</option>
                <option>Example one</option>
                <option>Example one</option>
                <option>Example one</option>
                <option>Example one</option>
            </select>

            <center><i class="fas fa-star"></i></center>

            <center><button type="button" class="btn btn-danger wrn-btn">Search</button></center>
		</div>
	</div>
			
	<div class="row">
        <div class="col-lg-2 col-md-2 col-sm-12 p-0">
        	<i class="fas fa-envelope-open">pnv@gmail.com</i>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
        	<i class="fas fa-phone">+84 396 987 863</i>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
        	<i class="fas fa-map-marker-alt">99 To Hien Thanh, Danang</i>
        </div>
    </div>
@endsection
