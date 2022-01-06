<?php

namespace App\Http\Controllers;

use App\Models\Email;
use App\Http\Requests\EmailRequest;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emails = new Email();
        // $emails = Email::get()->paginate();
        return view('emails.index')->with('emails', $emails);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\EmailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $email = Email::find($id);
        return view('emails.show')->with('email', $email);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $email = Email::find($id);
        return view('emails.edit')->with('email', $email);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\EmailRequest  $request
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    // public function update(EmailRequest $request, Email $email)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $email = Email::find($id);
        $email->delete();
        return redirect('/emails/index');
    }
}