@extends('layout.index')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <style>
      .contact{
        border:1px solid black;
       border-radius: 100px;
       width:50%;
       height:90%;
       margin-left: 20%;
        margin-bottom: 10%;
        margin-top: 5%;
       box-shadow: 20px 20px 20px 20px black;
      }
      .col-sm-6{
        box-shadow: 10px 30px 60px 10px black;
      }
     
    
      </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body style="color: white;">
  <form class="contact" action="{{ route('login') }}" method="POST">
    @csrf
    <u><h3 style="margin-top:5%;margin-left:40%;">LOGIN</h3></u>
  <div class="row mb-3" style="margin-top:5%;margin-left:15%;">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" id="inputEmail3" name="email">
    </div>
  </div>
  <div class="row mb-3"style="margin-left:15%;">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" id="inputPassword3" name="password">
    </div>
  </div>
  <div style="margin-left:50%;">
  <button type="submit" class="btn btn-danger">LOGIN</button>
</div>

</form>
  </body>
</html>
@endsection