@extends('layouts.app')
@section('content')
<main class = "container-fluid">
  <div class="container-fluid">

    <div class="jumbotron">
      <h1 align="center">Posts Borrados Recientemente</h1>
    </div>
        <div class="col-sm-8 col-sm-offset-2">
            @foreach($deletedBlogs as $blog)
            <article>
              <h2>{{$blog->title}}</h2>
              <h5>fecha de creacion:  {{$blog->created_at}}</h5>
              <h5>fecha de eliminacion:  {{$blog->deleted_at}}</h5>
              <h5>ID de recuperacion {{$blog->id}}</h5>
                <hr>
            </article>
            {!! Form::open(['method'=>'GET', 'action'=>['BlogController@restore', $blog->id]]) !!}
            <div class="form-group">
              {!! Form::submit("recuperar Blog", ['class'  =>  'btn btn-success']) !!}
            </div>
            {!! Form::close() !!}

            {!! Form::open(['method'=>'DELETE', 'action'=>['BlogController@destroyBlog', $blog->id]]) !!}
            <div class="form-group">
              {!! Form::submit("Destruir Blog", ['class'  =>  'btn btn-danger']) !!}
            </div>
            {!! Form::close() !!}
            @endforeach
        </div>


  </div>
</main>
@endsection
