@extends('layouts.app')

@section('content')
<div style="display: flex;">
    <div style="width: 200px; background: #ddd; padding: 10px;">
        <h3>Admin Menu</h3>
        <ul>
            <li><a href="{{ route('classes.create') }}">Create Class</a></li>
            <li><a href="{{ route('classes.index') }}">Manage Classes</a></li>
            <li><a href="{{ route('events') }}">Manage Events</a></li>
        </ul>
    </div>

    <div style="flex-grow: 1; padding: 20px;">
        <h2>Welcome, Admin!</h2>
    </div>
</div>
@endsection
