@extends ('layouts/app')

@section ('content')

<div class="jumbotron">
        <h1 class="display-4">{{$title}}</h1>
        <p class="lead">This is Laravel Application</p>
        <hr class="my-4">
         <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
         <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
      </div>
@endsection
