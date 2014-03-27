@extends('layouts.master')

@section('content')

<div class="blog-header">
	<a href="{{{ action('PostsController@index') }}}"><h1 class="blog-title">Strong like Bamboo</h1></a>
	<p class="lead blog-description">The blog written by a panda</p>
	<p><a href="{{{ action('PostsController@edit', $post->id) }}}">Edit post</a></p>
</div>
<hr>
<div class="blog-post">
    <h2 class="blog-post-title">{{{ $post->title }}}</h2>
    <p class="blog-post-meta">Written at {{{ $post->created_at }}} by a Panda</p>
    <p>{{{ $post->body }}}</p>
    <hr>
</div>

@stop