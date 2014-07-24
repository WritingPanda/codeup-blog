@extends('layouts.master')

@section('title')

Written by a Panda

@stop

@section('content')
<div class="container">

	<div class="blog-header">
		<h1 class="blog-title">Written by a Panda</h1>
		{{ Form::open(array('action' => array('PostsController@index'), 'method' => 'GET', 'id' => 'search')) }}
			{{ Form::submit('Search', array('class' => 'btn btn-link')) }}
			{{ Form::text('search') }}
		{{ Form::close() }}
	</div>
	<hr>
	<div class="row">
		<div class="blog-main">
			@foreach ($posts as $post)
			<div class="blog-post">
			    <a class='btn btn-link' href="{{{ action('PostsController@show', $post->id) }}}"><h2 class="blog-post-title">{{{ $post->title }}}</h2></a>
			    <p class="blog-post-meta">Written by a Panda {{{ $post->created_at->diffForHumans() }}}. 
			    	@if(Auth::check())
			    	<a class='btn btn-link' href="{{{ action('PostsController@edit', $post->id) }}}">Edit post</a>
			    	@endif
			    <p>
			    	{{ Str::words($post->renderBody(), 100) }} 
			    	<p>
			    		<a href="{{{ action('PostsController@show', $post->id) }}}" class="btn btn-info">Read more</a>
			    	</p>
			    </p>
			    <hr>
			</div>
			@endforeach

		</div>
		{{ $posts->appends(array('search' => Input::get('search')))->links() }}
	</div>
</div>

@stop