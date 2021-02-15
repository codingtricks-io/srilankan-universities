<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Devninja\University\University;

class HomeController extends Controller
{
    public function index()
    {
        $universities = University::getUniversities();
        return view('welcome')->with([
            'universities' => $universities
        ]);
    }

    public function getFaculties($name)
    {
        $faculty = University::getFaculties($name);
        return response()->json($faculty);
    }

    public function getDegrees($name)
    {
        $degree = University::getDegrees($name);
        return response()->json($degree);
    }

    public function documentation()
    {
        return view('pages.documentation');
    }
}
