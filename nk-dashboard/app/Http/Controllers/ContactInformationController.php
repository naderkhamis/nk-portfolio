<?php

namespace App\Http\Controllers;

use App\Models\ContactInformation;
use App\Http\Requests\ContactInformationRequest;
use App\Models\Developer;

class ContactInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = new ContactInformation();
        $contacts = ContactInformation::get();
        $developers = Developer::get(['id', 'name']);
        return view('contacts.index', compact('contacts', 'developers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ContactInformationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactInformationRequest $request)
    {
        $contact = new ContactInformation();
        $contact->dev_id = $request->dev_id;
        $contact->address = $request->address;
        $contact->email = implode(',', $request->email);
        $contact->phone = implode(',', $request->phone);
        $contact->save();
        return redirect('/contact-information/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactInformation  $contactInformation
     * @return \Illuminate\Http\Response
     */
    // public function show(ContactInformation $contactInformation)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactInformation  $contactInformation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = ContactInformation::find($id);
        $developers = Developer::get(['id', 'name']);
        return view('contacts.edit', compact('contact', 'developers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ContactInformationRequest  $request
     * @param  \App\Models\ContactInformation  $contactInformation
     * @return \Illuminate\Http\Response
     */
    public function update(ContactInformationRequest $request, ContactInformation $contactInformation)
    {
        $contact = ContactInformation::find($request->id);
        if ($request->has('dev_id')) {
            $contact->dev_id = $request->dev_id;
        } else {
            $contact->dev_id = $contact->dev_id;
        }
        $contact->address = $request->address;
        $contact->email = implode(',', $request->email);
        $contact->phone = implode(',', $request->phone);
        $contact->save();
        return redirect('/contact-information/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactInformation  $contactInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = ContactInformation::find($id);
        if ($contact == null) {
            return view('contacts.delete');
        } else {
            $contact->delete();
        }
        return redirect('/contact-information/index');
    }
}