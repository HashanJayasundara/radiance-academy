<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Show registration form
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Handle login
    public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');
    //     if (Auth::attempt($credentials)) {
    //         if (Auth::user()->role == 'admin') {
    //             return redirect()->route('admin.dashboard');
    //         } else {
    //             return redirect()->route('student.dashboard');
    //         }
    //     }

    //     return back()->withErrors(['email' => 'Invalid Credentials']);
    // }


    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('student.dashboard');
            }
        }

        return back()->with('error', 'Invalid email or password.')->withInput();
    }


    // Handle registration
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'email' => 'required|email|unique:users,email',
            'grade' => 'required|string|max:20',
            'class_type' => 'required|string',
            'gender' => 'required|string|in:Male,Female',
            'password' => 'required|min:8|confirmed', // password_confirmation must be present
        ]);

        $user = User::create([
            'name' => $request->name,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'grade' => $request->grade,
            'class_type' => $request->class_type,
            'gender' => $request->gender,
            'role' => 'student', // default role
            'password' => Hash::make($request->password),
            // 'password' => $request->password,
        ]);

        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }


    // Handle logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logged out successfully.');
    }

    // Redirect to proper dashboard
    public function dashboard()
    {
        if (auth()->user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('student.dashboard');
    }
}
