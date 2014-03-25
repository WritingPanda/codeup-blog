@extends('layouts.master')

@section('content')
    
    <h1>Your guess is: {{{ $guess }}}.</h1>

    <h2>The random number is: {{{ $rand }}} </h2>

	@if ($guess == $rand)
		<h3>"对的！你有好运！"</h3>
	@else 
		<h3>"错了！笨蛋！"</h3>
	@endif

@stop