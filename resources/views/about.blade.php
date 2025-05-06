@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="text-center mb-4">
        <h1 class="display-4">About Us</h1>
        <p class="lead">Discover who we are and what we stand for.</p>
    </div>

    <div class="row">
        <div class="col-md-6 mb-4">
            <h2 class="h4">Introduction</h2>
            <p>Welcome to Radiance Dance Academy, where dance meets passion.</p>
        </div>
        <div class="col-md-6 mb-4">
            <h2 class="h4">About the Teachers</h2>
            <p>Highly skilled and internationally recognized dance professionals.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-4">
            <h2 class="h4">About our Events</h2>
            <p>From local performances to international competitions, we shine!</p>
        </div>
        <div class="col-md-6 mb-4">
            <h2 class="h4">Achievements</h2>
            <p>Multiple national awards, TV appearances, and international shows.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-4">
            <h2 class="h4">Goals, Vision & Mission</h2>
            <p>To empower youth with dance skills and artistic excellence.</p>
        </div>
        <div class="col-md-6 mb-4">
            <h2 class="h4">Location</h2>
            <p>123 Dance Street, Cityland, Country.</p>
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="{{ url('/') }}" class="btn btn-primary btn-lg">Back to Home</a>
    </div>
</div>
@endsection
