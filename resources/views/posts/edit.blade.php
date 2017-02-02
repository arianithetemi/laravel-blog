@extends('main')

@section('title', '| Edit Blog Post')

@section('content')
	<div class="container">
		<div class="row show-post-container">
			<form action="{{ route('posts.update', $post->id) }}" method="POST">
				<div class="col-md-8">
					<div class="form-group">
				    	<label for="title">Title:</label>
				    	<textarea type="text" class="form-control" id="title" name="title" rows="1" style="resize:none;">{{ $post->title }}</textarea>
				    </div>
				    <div class="form-group">
				    	<label for="body">Body:</label>
				    	<textarea type="text" class="form-control" id="body" name="body" rows="10">{{ $post->body }}</textarea>
				    </div>
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
								<a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-block">Cancel</a>
							</div>
							<div class="col-md-6">
								<button type="submit" class="btn btn-success btn-block">Save Changes</button>
								<input type="hidden" name="_token" value="{{ Session::token() }}">
              					{{ method_field('PUT') }}
							</div>	
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
@stop