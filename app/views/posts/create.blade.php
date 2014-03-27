@extends('layouts.master')

@section('content')
<h1 class='blog-title'>Create a new post</h1>
<hr>
<div class='blog-post'></div>
<form action="{{{ action('PostsController@store') }}}" role='form' class='form-horizontal' method='POST'>
	<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
		<label for='title' class='control-label col-lg-2'>Title</label>
		<div class='col-lg-8'>
    		<input class='form-control' type='text' id='title' name='title' autofocus='autofocus' value="{{{ Input::old('title') }}}">
    		{{ $errors->has('title') ? $errors->first('title', "<span class='help-block'>:message</span>") : '' }}
    	</div>
	</div>
	<div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
		<label for="body" class='col-lg-2 control-label'>Body</label>
		<div class='col-lg-8'>
			<textarea class='form-control' name='body' id='body' rows='5'>{{{ Input::old('body') }}}</textarea>
			{{ $errors->has('body') ? $errors->first('body', "<span class='help-block'>:message</span>") : '' }}
		</div>
	</div>
	<div class='form-group'>
		<div class='col-lg-2 col-lg-offset-2'>
			<button type="submit" class="btn btn-primary">Create Post</button>
		</div>
	</div>
</form>

@stop