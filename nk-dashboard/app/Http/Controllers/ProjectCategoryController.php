<?php

namespace App\Http\Controllers;

use App\Models\ProjectCategory;
use App\Http\Requests\ProjectCategoryRequest;
use Illuminate\Routing\ViewController;

class ProjectCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ProjectCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectCategoryRequest $request)
    {
        $category = new ProjectCategory();
        $category->id = $request->id;
        $category->name = $request->name;
        $category->save();
        return redirect('/projects/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectCategory  $projectCategory
     * @return \Illuminate\Http\Response
     */
    // public function show(ProjectCategory $projectCategory)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectCategory  $projectCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = ProjectCategory::find($id);
        return view('edit-project-category')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ProjectCategoryRequest  $request
     * @param  \App\Models\ProjectCategory  $projectCategory
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectCategoryRequest $request, ProjectCategory $projectCategory)
    {
        $category = ProjectCategory::find($request->id);
        $category->id = $request->name;
        $category->name = $request->id;
        $category->save();
        return redirect('projects-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectCategory  $projectCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = ProjectCategory::find($id);
        $category->delete();
        return redirect('projects-index');
    }
}