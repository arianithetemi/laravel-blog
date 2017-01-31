@extends('main')

@section('title', '| View Post')

@section('content')
	<div class="container">
		<h1>{{ $post->title }}</h1>
		<p>{{ $post->body }}</p>
	</div>
@stop