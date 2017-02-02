@extends('main')

@section('title', '| All Posts')
@section('stylesheets')
	<link rel="stylesheet" href="{{ asset('css/allposts.css') }}" />
@stop

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h1>All posts</h1>
			</div>
			<div class="col-md-2">
				<a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-info btn-h1-spacing">Create new post</a>
			</div>
			<div class="col-md-12">
				<hr />
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-hover">
					<thead>
						<th>#</th>
						<th>Title</th>
						<th>Body</th>
						<th>Created At</th>
						<th>Actions</th>
					</thead>
					<tbody>
						@foreach($posts as $post)
							<tr>
								<th>{{ $post->id }}</th>
								<td>{{ $post->title }}</td>
								<td>{{ substr($post->body, 0, 50) }}{{ strlen($post->body) > 50 ? "..." : "" }}</td>
								<td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
								<td><a class="btn btn-sm btn-default" href="{{ route('posts.show', $post->id) }}">View</a>   <a class="btn btn-default btn-sm" href="{{ route('posts.edit', $post->id) }}">Edit</a>   <a onclick="confirm('Are you sure to delete!?');" class="btn btn-default btn-sm" href="{{ route('posts.destroy', $post->id) }}">Delete</a></td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@stop