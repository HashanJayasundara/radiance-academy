<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('student.dashboard');
            }
        }

        return back()->withErrors(['email' => 'Invalid Credentials']);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'telephone' => 'required',
            'email' => 'required|email|unique:users',
            'grade' => 'required',
            'class_type' => 'required',
            'gender' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'grade' => $request->grade,
            'class_type' => $request->class_type,
            'gender' => $request->gender,
            'password' => bcrypt('password') // Default password
        ]);

        return redirect()->route('login')->with('success', 'Registered successfully.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function dashboard()
    {
        if (auth()->user()->role == 'admin') {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('student.dashboard');
    }
}
