<?php

namespace App\Http\Controllers;

use App\Models\Statistic;
use App\Http\Requests\StatisticRequest;

class StatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statistics = new Statistic();
        $statistics = Statistic::get();
        return view('statistics.index')->with('statistics',$statistics);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statistics = new Statistic();
        $statistics = Statistic::get();
        return view('statistics.index')->with('statistics',$statistics);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StatisticRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StatisticRequest $request)
    {
        $statistic = new Statistic();
        $statistic->name = $request->name;
        $statistic->count = $request->count;
        $statistic->icon = $request->icon;
        $statistic->save();
        return redirect('/statistics/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Statistic  $statistic
     * @return \Illuminate\Http\Response
     */
    // public function show(Statistic $statistic)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Statistic  $statistic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $statistic = Statistic::find($id);
        return view('statistics.edit')->with('statistic',$statistic);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StatisticRequest  $request
     * @param  \App\Models\Statistic  $statistic
     * @return \Illuminate\Http\Response
     */
    public function update(StatisticRequest $request, Statistic $statistic)
    {
        $statistic = Statistic::find($request->id);
        $statistic->name = $request->name;
        $statistic->count = $request->count;
        $statistic->icon = $request->icon;
        $statistic->save();
        return redirect('/statistics/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Statistic  $statistic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $statistic = Statistic::find($id);
        if ($statistic == null) {
            return view('statistics.delete');
        } else {
            $statistic->delete();
        }
        return redirect('/statistics/index');
    }
}
