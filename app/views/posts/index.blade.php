@extends('layouts.master')

@section('content')

<div class="blog-header">
	<h1 class="blog-title">Strong like Bamboo</h1>
	<p class="lead blog-description">The blog written by a panda</p>
	<a class='btn btn-link' href="{{{ action('PostsController@create') }}}">Write a new post</a>
</div>
<hr>
<div class="row">
	<div class="blog-main">
		@foreach ($posts as $post)
		<div class="blog-post">
		    <a class='btn btn-link' href="{{{ action('PostsController@show', $post->id) }}}"><h2 class="blog-post-title">{{{ $post->title }}}</h2></a>
		    <p class="blog-post-meta">Written by a Panda at {{{ $post->created_at->format('l, F jS Y @ h:i A') }}} <a class='btn btn-link' href="{{{ action('PostsController@edit', $post->id) }}}">Edit post</a>
		    <p>{{{ Str::words($post->body, 50) }}}</p>
		    <hr>
		</div>
		@endforeach
	</div>
	{{ $posts->links() }}
</div>

@stop