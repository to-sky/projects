@extends('layout')
@section('title', 'Update project')

@section('content')
	<form action="{{ route('projects.update', ['id' => $project->id]) }}" method="POST" class="form">
		@csrf
		@method('PUT')

		<div class="form-group">
			<label for="title">Title
				<input type="text" name="title" id="title" class="form-control" value="{{ $project->title }}">
			</label>	
		</div>

		<div class="form-group">
			<label for="description"> Description
				<textarea name="description" id="description" class="form-control">
					{{ $project->description }}
				</textarea>
			</label>
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-outline-primary">Update project</button>
		</div>
	</form>
@endsection