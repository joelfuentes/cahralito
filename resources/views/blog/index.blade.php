@extends('layouts.app')
@section('content')
<h1>Ultimos posts</h1>
<hr>

@foreach($blogs as $blog)

  <h2>{{$blog->title}}</h2>
  <p>{{$blog->body}}</p>

  <h5>fecha de creacion:  {{$blog->created_at}}</h5>
  <hr>
@endforeach
@endsection
