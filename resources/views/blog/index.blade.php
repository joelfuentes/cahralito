@extends('layouts.app')
@section('content')
<main class = "container-fluid">
  <div class="container-fluid">
    <div class="jumbotron">
      <h1 align="center">Ultimos posts</h1>
    </div>
        <div class="col-sm-8 col-sm-offset-2">
            @foreach($blogs as $blog)
            <article>
                <a href="#"><h2>{{$blog->title}}</h2></a>
                <p>{{$blog->body}}</p>
                <h5>fecha de creacion:  {{$blog->created_at}}</h5>
                <hr>
            </article>
            @endforeach
        </div>
  </div>
</main>
@endsection
