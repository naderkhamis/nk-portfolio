<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\Developer;
use App\Http\Requests\ProjectRequest;
use App\Http\Traits\UploadFileTrait;

class ProjectController extends Controller
{
    use UploadFileTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = new Project();
        $projects = Project::get();
        $categories = ProjectCategory::get(['id', 'name']);
        return view('projects.index', compact('projects', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ProjectCategory::get(['id', 'name']);
        $developers = Developer::get(['id', 'name']);
        return view('projects.create', compact('categories', 'developers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        $project = new Project();
        $project->name = $request->name;
        $project->cat_id = $request->cat_id;
        $project->image = $this->upload($request, $project->image);
        $project->url = $request->url;
        $project->description = $request->description;
        $project->dev_id = $request->dev_id;
        $project->save();
        return redirect('/projects/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $project = Project::find($id);
    //     return view('projects.show')->with('project', $project);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        $categories = ProjectCategory::get(['id', 'name']);
        $developers = Developer::get(['id', 'name']);
        return view('projects.edit', compact('project', 'categories', 'developers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ProjectRequest  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, Project $project)
    {
        $project = Project::find($request->id);
        $project->name = $request->name;
        if ($request->has('cat_id')) {
            $project->cat_id = $request->cat_id;
        } else {
            $project->cat_id = $project->cat_id;
        }
        $project->image = $this->upload($request, $project->image);
        $project->url = $request->url;
        $project->description = $request->description;
        if ($request->has('dev_id')) {
            $project->dev_id = $request->dev_id;
        } else {
            $project->dev_id = $project->dev_id;
        }
        $project->save();
        return redirect('/projects/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        if ($project == null) {
            return view('projects.delete');
        } else {
            $project->delete();
        }
        return redirect('/projects/index');
    }
}