<h1>Ultimos posts</h1>
<hr>

@foreach($blogs as $blog)
  {{$blog->title}}
  <br>
  <hr>
@endforeach
