<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::where('status', 'finished')->get();
        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'event_location' => 'required',
            'event_date' => 'required|date',
            'event_time' => 'required',
            'event_category' => 'required',
            'package_type' => 'required',
            'num_dancers' => 'required|integer'
        ]);

        Event::create($request->all());

        return redirect()->route('event.index')->with('success', 'Event placed successfully.');
    }

    public function manage()
    {
        $events = Event::all();
        return view('events.admin.events.manage', compact('events'));
    }
}
