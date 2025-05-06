@extends('layouts.app')

@section('content')
<div style="display: flex;">
    <div style="width: 200px; background: #ddd; padding: 10px;">
        <h3>Student Menu</h3>
        <ul>
            <li><a href="{{ route('classes.index') }}">My Class</a></li>
        </ul>
    </div>

    <div style="flex-grow: 1; padding: 20px;">
        <h2>Welcome, {{ auth()->user()->name }}!</h2>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>
@endsection
