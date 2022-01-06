<?php

namespace App\Http\Controllers;

use App\Models\SkillCategory;
use App\Http\Requests\SkillCategoryRequest;

class SkillCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('skills.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skills.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\SkillCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SkillCategoryRequest $request)
    {
        $category = new SkillCategory();
        $category->name = $request->name;
        $category->save();
        return redirect('/skills/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SkillCategory  $skillCategory
     * @return \Illuminate\Http\Response
     */
    // public function show(SkillCategory $skillCategory)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SkillCategory  $skillCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = SkillCategory::find($id);
        return view('skillCategories.edit')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\SkillCategoryRequest  $request
     * @param  \App\Models\SkillCategory  $skillCategory
     * @return \Illuminate\Http\Response
     */
    public function update(SkillCategoryRequest $request, SkillCategory $skillCategory)
    {
        $category = SkillCategory::find($request->id);
        $category->name = $request->name;
        $category->save();
        return redirect('/skills/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SkillCategory  $skillCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = SkillCategory::find($id);
        $category->delete();
        return redirect('/skills/index');
    }
}
