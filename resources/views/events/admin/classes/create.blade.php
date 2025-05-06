@extends('layouts.app')

@section('content')
<h2>Create New Class</h2>

<form action="{{ route('admin.classes.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Class Name</label>
        <input type="text" name="class_name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Grade</label>
        <input type="text" name="grade" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Dance Type</label>
        <select name="dance_type" class="form-control" required>
            <option>Kandyan</option>
            <option>Bollywood</option>
            <option>Indian-classic</option>
        </select>
    </div>

    <button type="submit" class="btn btn-success">Create</button>
</form>
@endsection
