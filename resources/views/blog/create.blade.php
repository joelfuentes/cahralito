@extends('layouts.app')
@section('content')
<main class = "container">
  <div class="container-fluid">
    <div class="jumbotron">
      <h1 align="center">crear blog post</h1>
    </div>
        <div class="col-sm-10 col-sm-offset-1">
          {!! Form::open(['method' => 'POST', 'action'=>'BlogController@store']) !!}
          <div class="form-group">
            {!! Form::label('title' , 'Titulo:')!!}
            {!! Form::text('title',null , ['class'=>'form-control'])!!}
          </div>
          <div class="form-group">
            {!! Form::label('body' , 'Contenido:')!!}
            {!! Form::textarea('body',null , ['class'=>'form-control'])!!}
          </div>
          <div class="form-group">
            {!! Form::submit('Crear Blog', ['class'=>'btn btn-success'])!!}
          </div>
          {!! Form::close() !!}
        </div>
  </div>
</main>
@endsection
