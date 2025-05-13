@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-3">
        <ul class="list-group">
            <li class="list-group-item"><a href="{{ route('admin.classes.create') }}">Create Class</a></li>
            <li class="list-group-item"><a href="{{ route('admin.classes.manage') }}">Manage Classes</a></li>
            <li class="list-group-item"><a href="{{ route('admin.events.manage') }}">Manage Events</a></li>
        </ul>
        <form method="POST" action="{{ route('logout') }}" class="mt-4">
            @csrf
            <button type="submit" class="btn btn-danger w-100">Logout</button>
        </form>
    </div>
    <div class="col-md-9">
        <h2>Admin Dashboard</h2>
        <p>Welcome, Admin! Manage everything easily.</p>
    </div>
</div>
@endsection
