<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'comment' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Contact::create($request->all());

        return redirect()->route('contact.form')->with('success', 'Thanks for your feedback!');
    }
}
