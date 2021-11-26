<?php

namespace App\Http\Controllers;

use App\Models\ClientOpinion;
use App\Http\Requests\ClientOpinionRequest;

class ClientOpinionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientOpinion = new ClientOpinion();
        $clientOpinion = ClientOpinion::get();
        return view('clientOpinion.index', $clientOpinion);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientOpinion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientOpinionRequest $request)
    {
        $clientOpinion = new ClientOpinion();
        $clientOpinion->name = $request->name;
        $destination = 'uploads/';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file->move($destination, date('mdy-his') . $file->getClientOriginalName());
        } else {
            return redirect()->back();
        }
        $clientOpinion->image = $destination . date('mdy-his') . $file->getClientOriginalName();
        $clientOpinion->company = $request->company;
        $clientOpinion->opinion = $request->opinion;
        $clientOpinion->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClientOpinion  $clientOpinion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientOpinion = ClientOpinion::find($id);
        return view('clientOpinion.show', $clientOpinion);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClientOpinion  $clientOpinion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientOpinion = ClientOpinion::find($id);
        return view('clientOpinion.edit', $clientOpinion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClientOpinion  $clientOpinion
     * @return \Illuminate\Http\Response
     */
    public function update(ClientOpinionRequest $request, ClientOpinion $clientOpinion)
    {
        $clientOpinion = ClientOpinion::find($request->id);
        $clientOpinion->name = $request->name;
        $clientOpinion->company = $request->company;
        $destination = 'uploads/';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file->move($destination, date('mdy-his') . $file->getClientOriginalName());
        } else {
            return redirect()->back();
        }
        $clientOpinion->image = $destination . date('mdy-his') . $file->getClientOriginalName();
        $clientOpinion->opinion = $request->opinion;
        $clientOpinion->save();
        return redirect('/clientOpinion/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClientOpinion  $clientOpinion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientOpinion = ClientOpinion::find($id);
        $clientOpinion->delete();
        return redirect('/clientOpinion/index');
    }
}