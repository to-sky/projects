@extends('layout')
@section('title', 'Show project')

@section('content')
	<h2>{{ $project->title }}</h2>
	<p>{{ $project->description }}</p>

	@if ($project->tasks->count())
		<div>
			@foreach($project->tasks as $task)
			<div class="custom-control custom-checkbox">
				<form method="POST" action="{{ route('completed.tasks', ['id' => $task->id]) }}">
					@if($task->completed)
						@method('DELETE')
					@endif
					@csrf

					<input type="checkbox" name="completed" class="custom-control-input" id="completed{{ $task->id }}" onchange="this.form.submit()" {{ $task->completed ? 'checked': '' }}>
					<label class="custom-control-label {{ $task->completed ? 'text-muted' : '' }}" for="completed{{ $task->id }}">{{ $task->description }}</label>
				</form>
			</div>
			@endforeach
		</div>
	@endif

	<div class="border p-2 my-3">
		<form action="{{ route('project.tasks.store', ['id' => $project->id]) }}" method="POST">
			@csrf

			<div class="form-group">
				<label for="description">New task</label>
				<input 
					type="text" 
					class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" 
					name="description" 
					placeholder="Enter you task" 
					value="{{ old('description') }}"
					required>

				@if($errors->has('description'))
					<div class="invalid-feedback">{{ $errors->get('description')[0] }}</div>
				@endif
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-success">Save</button>
			</div>
		</form>
	</div>

	<a href="{{ route('projects.index') }}" class="btn btn-outline-primary mt-3">Return to projects</a>
@endsection