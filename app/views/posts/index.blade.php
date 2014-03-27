@extends('layouts.master')

@section('content')

<div class="blog-header">
	<h1 class="blog-title">Strong like Bamboo</h1>
	<p class="lead blog-description">The blog written by a panda</p>
</div>
<hr>
<div class="row">
	<div class="col-sm-8 blog-main">
		@foreach ($posts as $post)
		<div class="blog-post">
		    <h2 class="blog-post-title">{{{$post->title}}}</h2>
		    <p class="blog-post-meta">Written at {{{ $post->created_at }}} by a Panda</p>
		    <p>{{{$post->body}}}</p>
		    <hr>
		</div>
		@endforeach
	</div>
</div>

@stop