<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\poster;
use App\Models\teacher;
use App\Models\Employment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;


class MainController extends Controller
{
    public function show()
    {
        $courses = Course::all();
        $posters = Poster::all();
        $teachers = Teacher::all();
        $employment = Employment::all();
        return view('home', [
            'courses' => $courses, 'posters' => $posters, 'teachers' => $teachers,
            'employment' => $employment
        ]);
    }
}
