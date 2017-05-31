@extends('main')

@section('title', '| Create New Post')

@section('stylesheets')
	<link rel="stylesheet" type="text/css" href="{{ elixir('css/parsley.css') }}">
@stop

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
	    	<h1>Create New Post</h1>
	    	<hr>
	    	<form data-parsley-validate method="POST" action="{{ route('posts.store') }}">
		    	{{ csrf_field() }}
		      	<div class="form-group">
		        	<label name="title" >Title:</label>
		        	<input id="title" name="title" class="form-control" required max-length="255">
		      	</div>
						<div class="form-group">
							<label name="slug">Slug:</label>
							<input id="slug" name="slug" class="form-control" required min-length="5" max-lenth="255" />
						</div>
		      	<div class="form-group">
		        	<label name="body">Post Body:</label>
		        	<textarea id="body" name="body" rows="10" class="form-control" required></textarea>
		      	</div>
		      	<input type="submit" value="Create Post" class="btn btn-success btn-lg btn-block">
	    	</form>
	  	</div>
	</div>﻿
</div>
@stop

@section('scripts')
	<script src="{{ elixir('js/parsley.min.js') }}"></script>
@stop
