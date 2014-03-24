@extends('layouts.master')

@section('content')
    
    <h1>Your guess is: {{{ $guess }}}.</h1>

    <h2>The random number is: {{{ $rand }}} </h2>

	@if ($guess == $rand)
		<h3>"That's right! Nice work!"</h3>
	@else 
		<h3>"Sorry, not right. Try again by refreshing the page."</h3>
	@endif

@stop