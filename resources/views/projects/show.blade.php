@extends ('layout')


<h1 class="title">{{ $project->title }}</h1>
<p>{{ $project->description }}</p>
@if($project->tasks->count())
<div>
	@foreach($project->tasks as $task)
		<li>{{$task->description}}</li>
	@endforeach
</div>
@endif
<p><a href="/projects/{{ $project->id}}/edit">Edit</a></p>

<form method="POST" action="/projects/{{ $project->id }}">
		{{ method_field('DELETE') }}
		{{ csrf_field() }}

	{{-- 	@method('DELETE')
		@csrf --}}
		
		<div class="field">

			<div class="control">
				<button type="submit" class="button">Delete Project</button>
			</div>
		</div>

</form>

@section('content')