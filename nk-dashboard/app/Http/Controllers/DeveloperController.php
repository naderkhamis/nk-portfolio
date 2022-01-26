<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use App\Http\Requests\DeveloperRequest;
use App\Http\Traits\UploadFileTrait;

class DeveloperController extends Controller
{
    use UploadFileTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $developers = new Developer();
        $developers = Developer::get();
        return view('developer.index')->with('developers', $developers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('developer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDeveloperRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DeveloperRequest $request)
    {
        $developer = new Developer();
        $developer->name = $request->name;
        $developer->nationality = $request->nationality;
        $developer->date_of_birth = $request->date_of_birth;
        $developer->experience = $request->experience;
        $developer->image = $this->upload($request, $developer->image);
        $developer->introduction = $request->introduction;
        $developer->save();
        return redirect('/personal-information/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Developer  $developer
     * @return \Illuminate\Http\Response
     */
    // public function show(Developer $developer)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Developer  $developer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $developer = Developer::find($id);
        return view('developer.edit')->with('developer', $developer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDeveloperRequest  $request
     * @param  \App\Models\Developer  $developer
     * @return \Illuminate\Http\Response
     */
    public function update(DeveloperRequest $request, Developer $developer)
    {
        $developer = Developer::find($request->id);
        $developer->name = $request->name;
        $developer->nationality = $request->nationality;
        $developer->date_of_birth = $request->date_of_birth;
        $developer->experience = $request->experience;
        $developer->image = $this->upload($request, $developer->image);
        $developer->introduction = $request->introduction;
        $developer->save();
        return redirect('/personal-information/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Developer  $developer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $developer = Developer::find($id);
        if ($developer == null) {
            return view('developer.delete');
        } else {
            $developer->delete();
        }
        return redirect('/personal-information/index');
    }
}