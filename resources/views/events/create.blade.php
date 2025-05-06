@extends('layouts.app')

@section('content')
<h2>Place an Event</h2>

<form action="{{ route('events.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Customer Name</label>
        <input type="text" name="customer_name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Event Location</label>
        <input type="text" name="event_location" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Event Time</label>
        <input type="time" name="event_time" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Event Date</label>
        <input type="date" name="event_date" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Event Category</label>
        <input type="text" name="event_category" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Package Type</label>
        <select name="package_type" class="form-control" required>
            <option>Standard</option>
            <option>Premium</option>
            <option>Pro</option>
        </select>
    </div>
    <div class="mb-3">
        <label>Number of Dancers</label>
        <input type="number" name="number_of_dancers" class="form-control" required>
    </div>

    <div class="d-flex justify-content-between">
        <a href="{{ route('events.index') }}" class="btn btn-secondary">Exit</a>
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</form>
@endsection



<!-- @extends('layouts.app')

@section('content')
<h2>Place Your Event</h2>

<form action="{{ route('events.store') }}" method="POST">
    @csrf
    <input type="text" name="customer_name" placeholder="Customer Name" required><br><br>
    <input type="text" name="event_location" placeholder="Event Location" required><br><br>
    <input type="time" name="event_time" required><br><br>
    <input type="date" name="event_date" required><br><br>
    <input type="text" name="event_category" placeholder="Event Category" required><br><br>

    <select name="package_type" required>
        <option value="">Select Package</option>
        <option value="Standard">Standard</option>
        <option value="Premium">Premium</option>
        <option value="Pro">Pro</option>
    </select><br><br>

    <input type="number" name="number_of_dancers" placeholder="Number of Dancers" required><br><br>

    <button type="submit">Submit</button>
    <a href="{{ route('events') }}">Exit</a>
</form>
@endsection -->
