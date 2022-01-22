<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Certificate;
use App\Models\ContactInformation;
use App\Models\Developer;
use App\Models\Skill;
use Illuminate\Http\Request;

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
        $currentPosition = Career::latest()->first('title');
        $location = ContactInformation::latest()->first('address');
        $certificate = Certificate::latest()->first('title');
        $positions = Career::get('title');
        $skills = Skill::orderBy('id', 'ASC')->get('name');
        return view('home', compact('developer', 'currentPosition', 'location', 'certificate', 'positions', 'skills'));
    }

    public function show()
    {
        return view('test');
    }
}