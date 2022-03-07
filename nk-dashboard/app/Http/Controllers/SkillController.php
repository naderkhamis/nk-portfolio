<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\SkillCategory;
use App\Models\Developer;
use App\Http\Requests\SkillRequest;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = SkillCategory::get(['id', 'name']);
        $skills = new Skill();
        $skills = Skill::orderBy('cat_id')->get();
        $developers = Developer::get(['id', 'name']);
        return view('skills.index', compact(['categories', 'skills', 'developers']));
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
     * @param  \App\Http\Requests\SkillRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SkillRequest $request)
    {
        $skill = new Skill();
        $skill->name = $request->name;
        $skill->cat_id = $request->category;
        $skill->performance = $request->performance;
        $skill->dev_id = $request->developer;
        $skill->save();
        return redirect('/skills/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    // public function show(Skill $skill)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skill = Skill::find($id);
        $categories = SkillCategory::get(['id', 'name']);
        $developers = Developer::get(['id', 'name']);
        return view('skills.edit', compact(['categories', 'skill', 'developers']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\SkillRequest  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(SkillRequest $request, Skill $skill)
    {
        $skill = Skill::find($request->id);
        $skill->name = $request->name;
        $skill->cat_id = $request->category;
        $skill->performance = $request->performance;
        $skill->dev_id = $request->developer;
        $skill->save();
        return redirect('/skills/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Skill::find($id);
        $skill->delete();
        return redirect('/skills/index');
    }
}