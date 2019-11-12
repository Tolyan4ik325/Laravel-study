@extends ('layout')





<h1 class="title">{{ $project->title }}</h1>
<p>{{ $project->description }}</p>

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

@if($project->tasks->count())
<div class="box">
	@foreach($project->tasks as $task)
			<form method="POST" action="/completed-tasks/{{ $task->id }}">
				
				@if($task->completed)
					{{method_field('DELETE')}}
				@endif

				{{ csrf_field() }}	
				<label for="completed" class="checkbox {{$task->completed ? 'is-completed' : ''}}">
					<input type="checkbox" name="completed" onchange="this.form.submit()" {{$task->completed ? 'checked' : ''}}>
					{{ $task->description }}
				</label>
			</form>
	@endforeach
</div>
@endif

{{-- add a new tas form --}}

<form method="POST" action="/projects/{{ $project->id }}/tasks" class="box">
	{{ csrf_field() }}
	<div class="field">
		<label for="" class="label">New Task</label>
	</div>
	<div class="control">
		<input type="text" class="input" name="description" placeholder="New Task">
	</div>
	<div class="field">
		<div class="control">
			<button type="submit" class="button is-link">Add Task</button>
		</div>
	</div>
	
</form>

@if($errors->any())
		<div class="notification is-danger">
			
			<ul>
				
				@foreach ($errors->all() as $error) 
					<li>{{ $error }}</li>
				@endforeach

			</ul>

		</div>
@endif

@section('content')