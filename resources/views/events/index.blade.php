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


