@extends('layouts.master')

@section('content')

@if (empty($post->id))
	<h1 class='blog-title'>Create a new post</h1>
	<hr>
	{{ Form::open(array('action' => 'PostsController@store', 'class' => 'form-horizontal')) }}
@else
	<h1 class='blog-title'>Edit post</h1>
	<hr>
	{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'put', 'class' => 'form-horizontal')) }}
@endif
	<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
		{{ Form::label('title', 'Title', array('class' => 'control-label col-lg-2')) }}
		<div class='col-lg-8'>
    		{{ Form::text('title', null, array('class' => 'form-control', 'autofocus' => 'autofocus')) }}
    		{{ $errors->has('title') ? $errors->first('title', "<span class='help-block'>:message</span>") : '' }}
    	</div>
	</div>
	<div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
		{{ Form::label('body', 'Body', array('class' => 'col-lg-2 control-label')) }}
		<div class='col-lg-8'>
			{{ Form::textarea('body', null, array('class' => 'form-control', 'row' => '6')) }}
			{{ $errors->has('body') ? $errors->first('body', "<span class='help-block'>:message</span>") : '' }}
		</div>
	</div>
	<div class='form-group'>
		<div class='col-lg-4 col-lg-offset-2'>
		@if (empty($post->id))
			<p><button type="submit" class="btn btn-primary">Create Post</button>
		@else
			<p><button type="submit" class="btn btn-primary">Update Post</button>
				<a class='btn btn-link' id='btnDeletePost' href="#">Delete Post</a>
		@endif
			<a type='button' class='btn btn-link' href="{{{ action('PostsController@index') }}}">Cancel</a></p>
		</div>
	</div>
	<div class='form-group'>
		{{ Form:: }}
	</div>
	{{ Form::close() }}
	@if (!empty($post->id))
		{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'delete', 'id' => 'formDeletePost')) }}
		{{ Form::close() }}
	@endif

@stop

@section('bottomscript')
	@if (!empty($post->id))
		<script>
			
			$('#btnDeletePost').on('click', function(e) {
				e.preventDefault();
				if(confirm('Delete post?')) {
					$('#formDeletePost').submit();
				};
			});

		</script>
	@endif
@stop