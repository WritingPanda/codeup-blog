@extends('layouts.master')

@section('title')

A Blog Written by a Panda

@stop

@section('content')

<div class="blog-header text-center">
	<h1 class="blog-title">A Blog Written by a Panda</h1>
</div>
<hr>

<div class="container">
	@if ($posts->isEmpty())
		<h2 class="text-center">Sorry! No results from your search of {{{ $search }}}. Try something different or <a href="{{{ action('PostsController@index') }}}">go back</a>.</h2>
	@elseif (isset($_GET['search']))
		<a class='btn btn-link' href="{{{ action('PostsController@index') }}}">Go back</a>
	@endif
	
	<div class="blog-main">

		@foreach ($posts as $post)
		<div class="row">
			<div class="col-md-12">
				<div class="blog-post">
				    <a href="{{{ action('PostsController@show', $post->id) }}}"><h2 class="blog-post-title">{{{ $post->title }}}</h2></a>
				    <p class="blog-post-meta">Written by a Panda {{{ $post->created_at->diffForHumans() }}}. 
				    	@if(Auth::check())
				    	<a class='btn btn-link' href="{{{ action('PostsController@edit', $post->id) }}}">Edit post</a>
				    	@endif
				    <p>
				    	{{ Str::words($post->renderBody(), 75) }} 
				    	<p>
				    		<a href="{{{ action('PostsController@show', $post->id) }}}" class="btn btn-info">Read more</a>
				    	</p>
				    </p>
				    <hr>
				</div>
			</div>
		</div>
		@endforeach

	</div>

	{{ $posts->appends(array('search' => Input::get('search')))->links() }}

</div>

@stop