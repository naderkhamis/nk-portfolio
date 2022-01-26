<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use Carbon\Carbon;
use App\Models\ContactInformation;
use App\Models\Certificate;
use App\Models\Skill;
use App\Models\Career;

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
        $developer = Developer::latest()->first(['name', 'date_of_birth', 'nationality', 'image', 'introduction']);
        $developer_age = Carbon::parse($developer->date_of_birth)->diffInYears(Carbon::now());
        $location = ContactInformation::latest()->first('address');
        $certificate = Certificate::latest()->first('title');
        $skills = Skill::orderBy('id', 'ASC')->get('name');
        $positions = Career::get('title');
        $currentPosition = Career::latest()->first('title');
        return view('home', compact('developer', 'developer_age', 'location', 'certificate', 'skills', 'positions', 'currentPosition'));
    }
}