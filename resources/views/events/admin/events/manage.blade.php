@extends('layouts.app')

@section('content')
<h2>Manage Events</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Customer</th>
            <th>Location</th>
            <th>Date</th>
            <th>Time</th>
            <th>Package</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($events as $event)
            <tr>
                <td>{{ $event->customer_name }}</td>
                <td>{{ $event->event_location }}</td>
                <td>{{ $event->event_date }}</td>
                <td>{{ $event->event_time }}</td>
                <td>{{ $event->package_type }}</td>
                <td>
                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
