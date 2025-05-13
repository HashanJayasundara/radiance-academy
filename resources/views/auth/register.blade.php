@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Register</h4>
                </div>
                <div class="card-body">

                    {{-- Laravel validation errors (on form submission) --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form id="registerForm" action="{{ route('register') }}" method="POST" novalidate>
                        @csrf

                        {{-- Name --}}
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                            <small class="text-danger" id="nameError"></small>
                        </div>

                        {{-- Telephone --}}
                        <div class="mb-3">
                            <label>Telephone</label>
                            <input type="text" name="telephone" id="telephone" class="form-control" value="{{ old('telephone') }}" required>
                            <small class="text-danger" id="telephoneError"></small>
                        </div>

                        {{-- Email --}}
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                            <small class="text-danger" id="emailError"></small>
                        </div>

                        {{-- Grade --}}
                        <div class="mb-3">
                            <label>Grade</label>
                            <input type="text" name="grade" id="grade" class="form-control" value="{{ old('grade') }}" required>
                            <small class="text-danger" id="gradeError"></small>
                        </div>

                        {{-- Class Type --}}
                        <div class="mb-3">
                            <label>Select Class</label>
                            <select name="class_type" id="class_type" class="form-select" required>
                                <option value="">-- Select Class --</option>
                                <option value="Kandyan">Kandyan</option>
                                <option value="Bollywood">Bollywood</option>
                                <option value="Indian-classic">Indian-classic</option>
                            </select>
                            <small class="text-danger" id="classTypeError"></small>
                        </div>

                        {{-- Gender --}}
                        <div class="mb-3">
                            <label>Gender</label>
                            <select name="gender" id="gender" class="form-select" required>
                                <option value="">-- Select Gender --</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <small class="text-danger" id="genderError"></small>
                        </div>

                        {{-- Password --}}
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                            <small class="text-danger" id="passwordError"></small>
                        </div>

                        {{-- Confirm Password --}}
                        <div class="mb-3">
                            <label>Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                            <small id="confirmError" class="text-danger"></small>
                            <small id="passwordMatch" class="text-success"></small>
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

{{-- JavaScript for Field-by-Field Validation --}}
<script>
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('registerForm');

    const fields = [
        'name',
        'telephone',
        'email',
        'grade',
        'class_type',
        'gender',
        'password',
        'password_confirmation'
    ];

    fields.forEach(field => {
        document.getElementById(field).addEventListener('input', () => validateField(field));
    });

    function validateField(field) {
        const value = document.getElementById(field).value.trim();
        const errorElement = document.getElementById(field + 'Error');

        if (value === '') {
            errorElement.textContent = 'This field is required';
        } else {
            errorElement.textContent = '';
        }

        if (field === 'email') {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(value)) {
                errorElement.textContent = 'Invalid email format';
            }
        }

        if (field === 'password' || field === 'password_confirmation') {
            const password = document.getElementById('password').value;
            const confirm = document.getElementById('password_confirmation').value;
            const match = document.getElementById('passwordMatch');
            const confirmError = document.getElementById('confirmError');

            if (password && confirm) {
                if (password === confirm) {
                    match.textContent = '✔ Passwords match';
                    confirmError.textContent = '';
                    match.classList.remove('text-danger');
                    match.classList.add('text-success');
                } else {
                    match.textContent = '';
                    confirmError.textContent = 'Passwords do not match';
                }
            }
        }
    }

    form.addEventListener('submit', (e) => {
        let hasError = false;
        fields.forEach(field => {
            const value = document.getElementById(field).value.trim();
            const errorElement = document.getElementById(field + 'Error');
            if (value === '') {
                errorElement.textContent = 'This field is required';
                hasError = true;
            }
        });

        const password = document.getElementById('password').value;
        const confirm = document.getElementById('password_confirmation').value;
        if (password !== confirm) {
            document.getElementById('confirmError').textContent = 'Passwords do not match';
            hasError = true;
        }

        if (hasError) e.preventDefault();
    });
});
</script>
@endsection
