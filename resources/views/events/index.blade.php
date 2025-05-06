@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Our Events</h2>
    <a href="{{ route('events.create') }}" class="btn btn-primary">Place an Event</a>
</div>

<div class="row">
    @foreach($events as $event)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-header">{{ $event->package_type }}</div>
                <div class="card-body">
                    <p><strong>Customer:</strong> {{ $event->customer_name }}</p>
                    <p><strong>Location:</strong> {{ $event->event_location }}</p>
                    <p><strong>Date:</strong> {{ $event->event_date }}</p>
                    <p><strong>Time:</strong> {{ $event->event_time }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection


<!-- @extends('layouts.app')

@section('content')
<h2>Our Events</h2>

<a href="{{ route('events.create') }}" class="btn btn-primary">Place Event</a>

<div style="display: flex; flex-wrap: wrap; margin-top: 20px;">
@foreach($events as $event)
    <div style="width: 30%; margin: 10px; padding: 10px; border: 1px solid #ccc;">
        <h4>{{ $event->package_type }} Package</h4>
        <p>Location: {{ $event->event_location }}</p>
        <p>Date: {{ $event->event_date }}</p>
        <p>Time: {{ $event->event_time }}</p>
        <p>Number of Dancers: {{ $event->number_of_dancers }}</p>
    </div>
@endforeach
</div>
@endsection -->
