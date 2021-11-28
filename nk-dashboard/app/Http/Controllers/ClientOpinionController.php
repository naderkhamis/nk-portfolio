<?php

namespace App\Http\Controllers;

use App\Models\ClientOpinion;
use App\Http\Requests\ClientOpinionRequest;
use App\Http\Traits\UploadFileTrait;

class ClientOpinionController extends Controller
{
    use UploadFileTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientOpinion = new ClientOpinion();
        $clientOpinion = ClientOpinion::get();
        return view('clientOpinion.index')->with('clientOpinion', $clientOpinion);
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
        $clientOpinion->company = $request->company;
        $clientOpinion->image = $this->upload($request, $clientOpinion->image);
        $clientOpinion->opinion = $request->opinion;
        $clientOpinion->date = $request->date;
        $clientOpinion->save();
        return redirect('/client-opinion/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClientOpinion  $clientOpinion
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $clientOpinion = ClientOpinion::find($id);
    //     return view('clientOpinion.show', $clientOpinion);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClientOpinion  $clientOpinion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientOpinion = ClientOpinion::find($id);
        return view('clientOpinion.edit')->with('clientOpinion', $clientOpinion);
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
        $clientOpinion->image = $this->upload($request, $clientOpinion->image);
        $clientOpinion->opinion = $request->opinion;
        $clientOpinion->date = $request->date;
        $clientOpinion->save();
        return redirect('/client-opinion/index');
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
        return redirect('/client-opinion/index');
    }
}
