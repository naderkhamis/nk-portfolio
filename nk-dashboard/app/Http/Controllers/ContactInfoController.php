<?php

namespace App\Http\Controllers;

use App\Models\ContactInfo;
use Illuminate\Http\Request;

class ContactInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactInfo = new ContactInfo();
        $contactInfo = ContactInfo::get();
        return view('contactInfo.index')->with('contactInfo', $contactInfo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contactInfo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contactInfo = new ContactInfo();
        $contactInfo->address = $request->address;
        $contactInfo->email = $request->email;
        $contactInfo->phone = $request->phone . '-' . $request->code;
        $contactInfo->save();
        return redirect('/contact-info/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactInfo  $contactInfo
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $contactInfo = ContactInfo::find($id);
    //     return view('contactInfo.show')->with('contactInfo', $contactInfo);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactInfo  $contactInfo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contactInfo = ContactInfo::find($id);
        return view('contactInfo.edit')->with('contactInfo', $contactInfo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactInfo  $contactInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactInfo $contactInfo)
    {
        $contactInfo = ContactInfo::find($request->id);
        $contactInfo->address = $request->address;
        $contactInfo->email = $request->email;
        $contactInfo->phone = $request->phone . '-' . $request->code;
        $contactInfo->save();
        return redirect('/contact-info/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactInfo  $contactInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contactInfo = ContactInfo::find($id);
        $contactInfo->delete();
        return redirect('/contact-info/index');
    }
}