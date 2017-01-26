@extends('main')

@section('title', '| View Post')

@section('content')
	<h1 class="lead">{{ $post->title }}</h1>
	<p>{{ $post->body }}</p>
@stop