@extends ('layout')


@section('content')

	<h1 class="title">Create Project</h1>

	<form method="POST" action="/projects">
		{{ csrf_field() }}
		
		<div class="field">
			<label class="label" for="title">Title</label>

			<div class="control">
				<input type="text" class="input {{ $errors->has('title') ? 'is-danger' : ''}}" name="title" placeholder="Title">
			</div>
		</div>

		<div class="field">
			<label class="label" for="description">Description</label>

			<div class="control">
				<textarea name="description" class="textarea {{ $errors->has('description') ? 'is-danger' : ''}}" placeholder="Description"></textarea>
			</div>
		</div>

		<div class="field">

			<div class="control">
				<button type="submit" class="button is-link">Create Project</button>
			</div>
		</div>
		
		@if($errors->any())
		<div class="notification is-danger">
			
			<ul>
				
				@foreach ($errors->all() as $error) 
					<li>{{ $error }}</li>
				@endforeach

			</ul>

		</div>
		@endif
	</form>



@endsection 