@extends('layouts.app')
@section('content')
<main class = "container-fluid">
  <div class="container-fluid">

    <div class="jumbotron">
      <h1 align="center">Panel De Administradores</h1>
    </div>
        <div class="col-sm-8 col-sm-offset-2">
            <button class="btn btn-primary link"> <a style="color:#fff"; href="{{ url('/blog/create') }}">Crear Blog</a></button>
            <button class="btn btn-warning link"> <a style="color:#fff"; href="{{ url ('/blog/bin') }}">Basurero</a></button>
        </div>

  </div>
</main>
@endsection
