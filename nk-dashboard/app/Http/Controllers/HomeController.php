<?php

namespace App\Http\Controllers;

use App\Models\PersonalInformation;
use App\Models\ContactInformation;
use App\Models\Certificate;
use App\Models\Skill;
use App\Models\Career;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $personal_information = PersonalInformation::latest()->first(['name', 'nationality', 'date_of_birth', 'image', 'introduction']);
        $age = Carbon::parse($personal_information->date_of_birth)->diffInYears(Carbon::now());
        $location = ContactInformation::latest()->first('address');
        $certificate = Certificate::latest()->first('title');
        $skills = Skill::orderBy('id', 'ASC')->get('name');
        $positions = Career::get('title');
        $currentPosition = Career::latest()->first('title');
        return view('home', compact('personal_information', 'age', 'location', 'certificate', 'skills', 'positions', 'currentPosition'));
    }
}
