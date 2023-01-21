<?php

namespace App\Http\Controllers;

use App\Models\ContactInformation;
use App\Http\Requests\ContactInformationRequest;

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
        return view('contacts.index')->with('contacts',$contacts);
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
        return view('contacts.edit')->with('contact',$contact);
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
