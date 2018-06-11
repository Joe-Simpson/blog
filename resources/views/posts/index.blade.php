@extends('layouts.master')

@section('content')
<div class="col-md-8 blog-main">
  
  @foreach($posts as $post)
    <div class="blog-post">
      <h2 class="blog-post-title">{{ $post->title }}</h2>
      <p>{{ $post->body }}</p>
    </div>
  @endforeach

</div>
@endsection