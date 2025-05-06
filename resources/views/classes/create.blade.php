@extends('layouts.app')

@section('content')
<h2>Register for Classes</h2>

<form action="{{ route('classes.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" required><br><br>
    <input type="text" name="telephone" placeholder="Telephone" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="text" name="grade" placeholder="Grade" required><br><br>

    <select name="dance_class_id" required>
        <option value="">Select Class</option>
        <option value="1">Kandyan</option>
        <option value="2">Bollywood</option>
        <option value="3">Indian-classic</option>
    </select><br><br>

    <select name="gender" required>
        <option value="">Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select><br><br>

    <button type="submit">Submit</button>
    <a href="{{ route('classes.index') }}">Exit</a>
</form>
@endsection
