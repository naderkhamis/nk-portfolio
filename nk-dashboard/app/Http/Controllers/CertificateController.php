<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Http\Requests\CertificateRequest;
use App\Http\Traits\UploadFileTrait;


class CertificateController extends Controller
{
    use UploadFileTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificates = new Certificate();
        $certificates = Certificate::get();
        return view('certificates.index')->with('certificates',$certificates);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('certificates.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CertificateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CertificateRequest $request)
    {
        $certificate = new Certificate();
        $certificate->title = $request->title;
        $certificate->school = $request->school;
        $certificate->grade = $request->grade;
        $certificate->date = $request->date;
        $certificate->image = $this->upload($request, $certificate->image);
        $certificate->description = $request->description;
        $certificate->save();
        return redirect('/certificates/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Certificate  $education
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $certificate = Certificate::find($id);
        return view('certificates.show')->with('certificate', $certificate);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Certificate  $education
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $certificate = Certificate::find($id);
        return view('certificates.edit')->with('certificate',$certificate);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CertificateRequest  $request
     * @param  \App\Models\Certificate  $education
     * @return \Illuminate\Http\Response
     */
    public function update(CertificateRequest $request, Certificate $certificate)
    {
        $certificate = Certificate::find($request->id);
        $certificate->title = $request->title;
        $certificate->school = $request->school;
        $certificate->grade = $request->grade;
        $certificate->date = $request->date;
        $certificate->image = $this->upload($request, $certificate->image);
        $certificate->description = $request->description;
        $certificate->save();
        return redirect('/certificates/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Certificate  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $certificate = Certificate::find($id);
        if ($certificate == null) {
            return view('certificates.delete');
        } else {
            $certificate->delete();
        }
        return redirect('/certificates/index');
    }
}
