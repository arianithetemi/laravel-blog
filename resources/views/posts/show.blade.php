@extends('main')

@section('title', '| View Post')

@section('content')
	<div class="container">
		<div class="row show-post-container">
			<div class="col-md-8">
				<h1>{{ $post->title }}</h1>
				<p class="text-justify">{{ $post->body }}</p>
			</div>
			
			<div class="col-md-4 sidebar-for-post">
				<div class="well">
					<dl class="dl-horizontal">
						<dt>Created At:</dt>
						<dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>Last Updated:</dt>
						<dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
					</dl>
					<hr />
					<div class="row">
						<div class="col-md-6">
							<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-block">Edit</a>
						</div>
						<div class="col-md-6">
							<a href="{{ route('posts.destroy', $post->id) }}" class="btn btn-danger btn-block">Delete</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop