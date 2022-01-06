<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Developer;
use App\Http\Requests\CareerRequest;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $career = new Career();
        $career = Career::get();
        return view('career.index')->with('career', $career);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $developers = Developer::get(['id', 'name']);
        return view('career.create')->with('developers', $developers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCareerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CareerRequest $request)
    {
        $career = new Career();
        $career->dev_id = $request->dev_id;
        $career->title = $request->title;
        $career->company = $request->company;
        $career->from_date = $request->from;
        $career->to_date = $request->to;
        $career->status = $request->status;
        $career->description = $request->description;
        $career->save();
        return redirect('/career/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $career = Career::find($id);
        return view('career.show')->with('career', $career);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $developers = Developer::get(['id', 'name']);
        $career = Career::find($id);
        return view('career.edit')->with('career', $career)->with('developers', $developers);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCareerRequest  $request
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function update(CareerRequest $request, Career $career)
    {
        $career = Career::find($request->id);
        $career->dev_id = $request->dev_id;
        $career->title = $request->title;
        $career->company = $request->company;
        $career->from_date = $request->from;
        $career->to_date = $request->to;
        $career->status = $request->status;
        $career->description = $request->description;
        $career->save();
        return redirect('/career/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $career = Career::find($id);
        $career->delete();
        return redirect('/career/index');
    }
}