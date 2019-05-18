<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>UPDATE TITLES</title>
    <link rel="stylesheet" href="{{asset('public/css/app.css')}}">
</head>
<body>
    <div class="container">
        <h2 class="page-header"> TITLES <small>&hearts; Update &hearts;</small> </h2>
       
        <form method="POST" action="{{ route('titles.update', $title->id) }}">
        @method('PATCH')
        @csrf
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="id">Id:</label>
                    <input type="text" class="form-control" name="id" value="{!! old ('id',isset($title)?$title['id']:NULL) !!}"> 
                        <!-- //old:lấy giá trị cũ ra -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="label">Lable:</label>
                    <input type="text" class="form-control" placeholder="Input the name of title ..."  name="label" value="{{ $title->label }}">
                </div>
            </div>
            </div>

            <!-- button save -->
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success" style="margin-left: 15px">Save</button>
                </div>
            </div>
        </form>
    
    </div>
</body>
</html>