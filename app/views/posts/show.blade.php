@extends('layouts.master')

@section('content')

<div class="blog-header">
	<h1 class="blog-title">Strong like Bamboo</h1>
	<p class="lead blog-description">The blog written by a panda</p>
	<p><a type='button' class='btn btn-link' href="{{{ action('PostsController@edit', $post->id) }}}">Edit post</a> <a href="#" id='btnDeletePost' class='btn btn-link'>Delete</a> <a type='button' class='btn btn-link' href="{{{ action('PostsController@index') }}}">Go back</a></p>
</div>
<hr>
<div class="blog-post">
    <h2 class="blog-post-title">{{{ $post->title }}}</h2>
    <p class="blog-post-meta">Written by a Panda on {{{ $post->updated_at->format('l, F jS Y @ h:i A') }}}</p>
    <p>{{{ $post->body }}}</p>
    <hr>
</div>
{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'delete', 'id' => 'formDeletePost')) }}
{{ Form::close() }}

@stop

@section('bottomscript')

<script>
	
	$('#btnDeletePost').on('click', function(e) {
		e.preventDefault();
		if(confirm('Delete post?')) {
			$('#formDeletePost').submit();
		};
	});

</script>

@stop