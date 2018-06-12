@extends('layouts.master')

@section('content')
	<div class="col-md-8 blog-main">
	  	<div class="blog-post">
			<h2 class="blog-post-title">
				{{ $post->title }}
			</h2>
			<p class="blog-post-meta">
				{{ $post->created_at->toFormattedDateString() }}
			</p>
			<p>
				{{ $post->body }}
			</p>
		</div>
		<hr>
		<div class="comments">
			<ul class="list-group">
				@foreach($post->comments as $comment)
					<li class="list-group-item">
						<strong>
							{{ $comment->created_at->diffForHumans() }}: &nbsp;
						</strong>
						{{ $comment->body }}
					</li>
				@endforeach	
			</ul>
		</div>
		<hr>
		<div class="card">
			<form method="POST" action="/posts/{{ $post->id }}/comments">

				{{ csrf_field() }}
				
				<div class="form-group">
					<textarea name="body" placeholder="Your comment here." class="form-control" required></textarea>
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Add Comment</button>
				</div>

				@include('layouts.errors')
		
			</form>
		</div>
	</div>
@endsection