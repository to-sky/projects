@extends('layout')
@section('title', 'Projects')

@section('content')
	<h1>Projects</h1>
	<a href="{{ route('projects.create') }}" class="btn btn-success">New project</a>

	<div class="row">
		@foreach($projects as $project)
		<div>
			<h2>{{ $project->title }}</h2>
			<p>{{ $project->description }}</p>

			<div class="btn-group">
				<a href="{{ route('projects.show', ['id' => $project->id]) }}" class="btn-item">Show</a>
				<a href="{{ route('projects.edit', ['id' => $project->id]) }}" class="btn-item">Edit</a>

				<form action="{{ route('projects.destroy', ['id' => $project->id]) }}" method="POST">
					@csrf
					@method('DELETE')

					<button type="submit" class="btn btn-outline-danger">Delete</button>
				</form>
			</div>
		</div>
		@endforeach
	</div>	
@endsection