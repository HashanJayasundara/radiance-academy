@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white text-center">
                    <h3>Register</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required>
                        </div>

                        <div class="mb-3">
                            <label for="telephone" class="form-label">Telephone</label>
                            <input type="text" id="telephone" name="telephone" class="form-control" placeholder="Enter your telephone number" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                        </div>

                        <div class="mb-3">
                            <label for="grade" class="form-label">Grade</label>
                            <input type="text" id="grade" name="grade" class="form-control" placeholder="Enter your grade" required>
                        </div>

                        <div class="mb-3">
                            <label for="class_type" class="form-label">Select Class</label>
                            <select id="class_type" name="class_type" class="form-select" required>
                                <option value="" disabled selected>Select a class</option>
                                <option>Kandyan</option>
                                <option>Bollywood</option>
                                <option>Indian-classic</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select id="gender" name="gender" class="form-select" required>
                                <option value="" disabled selected>Select your gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('login') }}" class="btn btn-secondary">Exit</a>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
