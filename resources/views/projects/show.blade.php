@extends('layout')
@section('title', 'Show project')

@section('content')
	<h2>{{ $project->title }}</h2>
	<p>{{ $project->description }}</p>

	<a href="{{ route('projects.index') }}" class="btn btn-outline-info">Return to list projects</a>
@endsection