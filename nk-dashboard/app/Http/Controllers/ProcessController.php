<?php

namespace App\Http\Controllers;

use App\Models\Process;
use App\Http\Requests\ProcessRequest;

class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $processes = new Process();
        $processes = Process::get();
        return view('processes.index')->with('processes',$processes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('processes.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ProcessRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProcessRequest $request)
    {
        $process = new Process();
        $process->name = $request->name;
        $process->icon = $request->icon;
        $process->description = $request->description;
        $process->save();
        return redirect('/processes/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $process = Process::find($id);
        return view('processes.show')->with('process', $process);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $process = Process::find($id);
        return view('processes.edit')->with('process',$process);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ProcessRequest  $request
     * @param  \App\Models\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function update(ProcessRequest $request, Process $process)
    {
        $process = Process::find($request->id);
        $process->name = $request->name;
        $process->icon = $request->icon;
        $process->description = $request->description;
        $process->save();
        return redirect('/processes/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $process = Process::find($id);
        if ($process == null) {
            return view('processes.delete');
        } else {
            $process->delete();
        }
        return redirect('/processes/index');
    }
}
