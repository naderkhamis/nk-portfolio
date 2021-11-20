<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
        return view('career.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $career = new Career();
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
        $career = Career::find($id);
        $currentDate = Carbon::now()->toDateString();
        return view('career.edit', compact(['career', 'currentDate']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Career $career)
    {
        $career = Career::find($request->id);
        $career->title = $request->title;
        $career->company = $request->company;
        $career->from_date = $request->from;
        if ($request->status === 1) {
            $career->to_date = Null;
        } else {
            $career->to_date = $request->to;
        }
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