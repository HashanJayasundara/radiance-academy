<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanceClass;

class StudentController extends Controller
{
    public function dashboard()
    {
        return view('student.dashboard');
    }

    public function classes()
    {
        $myClasses = DanceClass::all(); // Example only; should be filtered per student
        return view('student.classes', compact('myClasses'));
    }
}
