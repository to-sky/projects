@extends('layout')
@section('title', 'Create project')

@section('content')
	<form action="{{ route('projects.store') }}" method="POST">
		@csrf
		<div class="form-group">
			<label for="title">Title</label>
			<input 
				type="text" 
				name="title" 
				id="title" 
				class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" 
				value="{{ old('title') }}" 
				required>
		</div>

		<div class="form-group">
			<label for="description">Description</label>
			<textarea 
				name="description" 
				id="description" 
				class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" 
				rows="8" 
				required>{{ old('description') }}</textarea>
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-outline-primary">Create project</button>
		</div>
	</form>

	@include('errors')
@endsection