@extends('layouts.app')

@section('content')
<h2>Manage Classes</h2>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Class Name</th>
            <th>Grade</th>
            <th>Dance Type</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($classes as $class)
            <tr>
                <td>{{ $class->class_name }}</td>
                <td>{{ $class->grade }}</td>
                <td>{{ $class->dance_type }}</td>
                <td>
                    <a href="#" class="btn btn-sm btn-primary">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
