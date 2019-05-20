<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Add Titles</title>
    <link rel="stylesheet" href="{{asset('public/css/app.css')}}">
</head>
<body>
    <div class="container">
        <h2 class="page-header"> Titles <small>&hearts; Add &hearts;</small> </h2>

        <form method="post" action="{!! route('titles.store') !!}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
           
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="label">Lable:</label>
                    <input type="text" class="form-control" placeholder="Input the name of title ..."  name="label">
                </div>
            </div>

            <!-- button add -->
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success" style="margin-left: 15px">Add Title</button>
                </div>
            </div>
            <!-- /butto add -->
        </form>
    </div>
</body>
</html>