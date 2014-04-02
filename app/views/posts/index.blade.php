@extends('layouts.master')

@section('content')

<div class="blog-header">
	<h1 class="blog-title">Strong like Bamboo</h1>
	<p class="lead blog-description">The blog written by a panda</p>
	<a class='btn btn-link' href="{{{ action('PostsController@create') }}}">Write a new post</a>
	<!-- Move to the master, if possible -->
	{{ Form::open(array('action' => array('PostsController@index'), 'method' => 'GET', 'class' => 'pull-right')) }}
		{{ Form::text('search') }}
		{{ Form::submit('Search', array('class' => 'btn btn-link')) }}
	{{ Form::close() }}
</div>
<hr>
<div class="row">
	<div class="blog-main">
		@foreach ($posts as $post)
		<div class="blog-post">
		    <a class='btn btn-link' href="{{{ action('PostsController@show', $post->id) }}}"><h2 class="blog-post-title">{{{ $post->title }}}</h2></a>
		    <p class="blog-post-meta">Written by a Panda on {{{ $post->updated_at->format('l, F jS Y @ h:i A') }}} <a class='btn btn-link' href="{{{ action('PostsController@edit', $post->id) }}}">Edit post</a>
		    <p>{{{ Str::words($post->body, 50) }}}</p>
		    <hr>
		</div>
		@endforeach

	</div>
	{{ $posts->appends(array('search' => Input::get('search')))->links() }}
</div>

@stop