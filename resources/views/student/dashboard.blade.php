@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-3">
        <ul class="list-group">
            <li class="list-group-item"><a href="{{ route('student.classes') }}">My Class</a></li>
        </ul>
        <form method="POST" action="{{ route('logout') }}" class="mt-4">
            @csrf
            <button type="submit" class="btn btn-danger w-100">Logout</button>
        </form>
    </div>

    <div class="col-md-9">
        <h2>Student Dashboard</h2>
        <p>Welcome to your class journey!</p>
    </div>
</div>
@endsection
