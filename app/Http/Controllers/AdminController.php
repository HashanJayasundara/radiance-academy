<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanceClass;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('events.admin.dashboard');
    }

    public function classes()
    {
        $myClasses = DanceClass::all(); // Example only; should be filtered per student
        return view('admin.classes', compact('myClasses'));


    }
}
