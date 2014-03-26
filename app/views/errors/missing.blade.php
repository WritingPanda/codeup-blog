@extends('layouts.master')

@section('content')
	<div class='text-center'>
		<a href="{{{ action('HomeController@showIndex') }}}"><img src="/img/awkward.gif" height=360  width=640 alt="Awkward gif"></a>
		<h1>Well, this is awkward. You've visited a page that doesn't exist.</h1>
	</div>
@stop