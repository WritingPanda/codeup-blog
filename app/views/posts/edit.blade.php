@extends('layouts.master')

@section('content')
<h1 class='blog-title'>Edit a new post</h1>
<hr>
{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'put', 'class' => 'form-horizontal')) }}
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
		<div class='col-lg-2 col-lg-offset-2'>
			<button type="submit" class="btn btn-primary">Update Post</button>
		</div>
	</div>
{{ Form::close() }}

@stop