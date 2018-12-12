@extends('layouts.app')
@section('title', 'Update project')

@section('content')
	<form action="{{ route('projects.update', ['id' => $project->id]) }}" method="POST">
		@csrf
		@method('PUT')

		<div class="form-group">
			<label for="title">Title</label>
			<input type="text" name="title" id="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" value="{{ $project->title }}" required>
		</div>

		<div class="form-group">
			<label for="description">Description</label>
			<textarea name="description" id="description" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" rows="8" required>{{ $project->description }}</textarea>
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-outline-primary">Update project</button>
		</div>
	</form>

	@include('errors')
@endsection