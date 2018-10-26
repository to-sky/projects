<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProjectTasksRequest;
use App\Project;
use App\Task;

class ProjectTasksController extends Controller
{
	public function store(ProjectTasksRequest $request, Project $project)
	{
		$project->addTask($request->description);

		return back();
	}
}
