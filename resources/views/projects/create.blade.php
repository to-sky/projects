@extends('layout')
@section('title', 'Create project')

@section('content')
	<form action="{{ route('projects.store') }}" method="POST" class="form">
		@csrf
		<div class="form-group">
			<label for="title">Title
				<input type="text" name="title" id="title" class="form-control">
			</label>	
		</div>

		<div class="form-group">
			<label for="description"> Description
				<textarea name="description" id="description" class="form-control"></textarea>
			</label>
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-outline-primary">Create project</button>
		</div>
	</form>
@endsection