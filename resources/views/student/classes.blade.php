@extends('layouts.app')

@section('content')
<h2>My Enrolled Classes</h2>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Class Name</th>
            <th>Grade</th>
            <th>Dance Type</th>
        </tr>
    </thead>
    <tbody>
        @foreach($myClasses as $class)
            <tr>
                <td>{{ $class->class_name }}</td>
                <td>{{ $class->grade }}</td>
                <td>{{ $class->dance_type }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
