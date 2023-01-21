<?php

namespace App\Http\Controllers;

use App\Models\PersonalInformation;
use App\Http\Requests\PersonalInformationRequest;
use App\Http\Traits\UploadFileTrait;

class PersonalInformationController extends Controller
{
    use UploadFileTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personal_information = new PersonalInformation();
        $personal_information = PersonalInformation::get();
        return view('personalInformation.index')->with('personal_information', $personal_information);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personalInformation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PersonalInformationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonalInformationRequest $request)
    {
        $personal_information = new PersonalInformation();
        $personal_information->name = $request->name;
        $personal_information->nationality = $request->nationality;
        $personal_information->date_of_birth = $request->date_of_birth;
        $personal_information->experience = $request->experience;
        $personal_information->image = $this->upload($request, $personal_information->image);
        $personal_information->introduction = $request->introduction;
        $personal_information->save();
        return redirect('/personal-information/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonalInformation  $personal_information
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personal_information = PersonalInformation::find($id);
        return view('personalInformation.show')->with('personal_information', $personal_information);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonalInformation  $personal_information
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personal_information = PersonalInformation::find($id);
        return view('personalInformation.edit')->with('personal_information', $personal_information);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PersonalInformationRequest  $request
     * @param  \App\Models\PersonalInformation  $personal_information
     * @return \Illuminate\Http\Response
     */
    public function update(PersonalInformationRequest $request, PersonalInformation $developer)
    {
        $personal_information = PersonalInformation::find($request->id);
        $personal_information->name = $request->name;
        $personal_information->nationality = $request->nationality;
        $personal_information->date_of_birth = $request->date_of_birth;
        $personal_information->experience = $request->experience;
        $personal_information->image = $this->upload($request, $personal_information->image);
        $personal_information->introduction = $request->introduction;
        $personal_information->save();
        return redirect('/personal-information/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonalInformation  $personal_information
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personal_information = PersonalInformation::find($id);
        if ($personal_information == null) {
            return view('personalInformation.delete');
        } else {
            $personal_information->delete();
        }
        return redirect('/personal-information/index');
    }
}
