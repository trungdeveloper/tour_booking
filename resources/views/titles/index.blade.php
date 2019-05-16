<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>LIST OF TITLE</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('public/bootstrap-4.0/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('public/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<!-- CSS user -->
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/style.css') }}">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="bang">
					<table class="table table-striped table-bordered table-hover">
	                    <thead>
	                      	<tr>
	                        	<th>ID</th>
	                        	<th>Label</th>
	                        	<th style="width: 20%">Tools</th>
	                      	</tr>
	                    </thead>
	                    <tbody>
       	@foreach($title as $value)      
          	<tr>
                <td> {!! $value["id"] !!} </td>
                <td> {!! $value["label"] !!} </td>         
                <td>
                <a href="{{ route('titles.create')}}" class="btn btn-primary">Create</a>
                <a href="{{ route('titles.edit',$value->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{ route('titles.destroy', $value->id)}}" class="btn btn-danger" type="submit">Delete</a></td>

          	</tr>	
      	@endforeach
	                    </tbody>
                  	</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>