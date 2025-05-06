@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card shadow-lg p-4" style="width: 100%; max-width: 400px;">
        <h2 class="text-center mb-4">Login</h2>

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Username / Email</label>
                <input type="text" id="email" name="email" class="form-control" placeholder="Enter your email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" id="remember" name="remember" class="form-check-input">
                <label for="remember" class="form-check-label">Remember Me</label>
            </div>

            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>

        

        <div class="mt-3 text-center">
        Not registered yet?<a href="{{ route('register') }}" class="text-decoration-none"> Register here</a>
        </div>
    </div>
</div>
@endsection
