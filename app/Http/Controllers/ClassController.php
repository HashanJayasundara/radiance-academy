<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanceClass;

class ClassController extends Controller
{
    public function create()
    {
        return view('admin.classes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'class_name' => 'required',
            'grade' => 'required',
            'dance_type' => 'required'
        ]);

        DanceClass::create($request->all());

        return redirect()->route('admin.classes.manage')->with('success', 'Class created successfully.');
    }

    public function manage()
    {
        $classes = DanceClass::all();
        return view('admin.classes.manage', compact('classes'));
    }
}
