@if (Session::has('success'))
	<div class="alert alert-success alert-dismissible"  role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Success!</strong> {{ Session::get('success') }}
	</div>

@elseif (count($errors) > 0)
	<div class="alert alert-danger" role="alert">
		<ul>
			<strong>Errors:</strong>
			@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif