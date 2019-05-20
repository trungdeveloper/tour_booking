<<<<<<< HEAD:resources/views/titles/edit.blade.php
@extends('_layouts.app')
=======
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
>>>>>>> d29d64d54889577371586a2e5d4f103120a1a378:resources/views/title/edit.blade.php

@section('header')

  @include(
    '_layouts.header',
    ['title' => "Edit {$title['label']}"]
  )

@endsection


@section('content')

  @include(
    'titles/_form',
    
    [
      'errors'              =>  $errors,
      'action'              =>  URL::action('TitleController@update', $title->id),
      'titles'  =>  $title
    ]
  )

@endsection