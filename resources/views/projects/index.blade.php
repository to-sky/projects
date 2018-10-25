@extends('layout')
@section('title', 'Projects')

@section('content')
	<div class="row mb-2">
		<div class="col p-0">
			<a href="{{ route('projects.create') }}" class="btn btn-success float-right mt-2">New project</a>
			<h1>Projects</h1>
		</div>
	</div>
	

	<div class="row">
		@foreach($projects as $project)
			<div class="border p-3 mb-2 w-100">
				<h2>{{ $project->title }}</h2>
				<p>{{ $project->description }}</p>

				<div class="border-top pt-2">
					<a href="{{ route('projects.show', ['id' => $project->id]) }}" class="btn btn-primary">Show</a>
					<a href="{{ route('projects.edit', ['id' => $project->id]) }}" class="btn btn-secondary">Edit</a>

					<form action="{{ route('projects.destroy', ['id' => $project->id]) }}" method="POST" class="d-inline">
						@csrf
						@method('DELETE')

						<button type="submit" class="btn btn-danger">Delete</button>
					</form>
				</div>

				@if ($project->tasks->count())
					<div class="mt-2">
						@foreach($project->tasks as $task)
							<span class="badge badge-secondary">{{ $task->description }}</span> 
						@endforeach
					</div>
				@endif
			</div>
		@endforeach
	</div>	
@endsection