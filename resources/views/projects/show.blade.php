@extends ('layout')


<h1 class="title">{{ $project->title }}</h1>
<p>{{ $project->description }}</p>
@if($project->tasks->count())
<div>
	@foreach($project->tasks as $task)
			<form method="POST" action="/tasks/{{ $task->id }}">
				{{ method_field('PATCH') }}
				{{ csrf_field() }}	
				<label for="completed" class="checkbox {{$task->completed ? 'is-completed' : ''}}">
					<input type="checkbox" name="completed" onchange="this.form.submit()" {{$task->completed ? 'checked' : ''}}>
					{{ $task->description }}
				</label>
			</form>
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