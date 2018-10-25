<?php

namespace App\Http\Controllers;

use App\Project;
use App\Http\Requests\ProjectsRequest;


class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Request\ProjectsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectsRequest $request)
    {
        Project::create($request->all());

        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Project $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Project $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Request\ProjectsRequest  $request
     * @param  App\Project $project
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectsRequest $request, Project $project)
    {
        $project->update($request->all());

        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Project $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->back();
    }
}