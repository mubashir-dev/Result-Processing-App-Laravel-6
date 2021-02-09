@extends('admin.layout.master')
@section('level', 'Student/Show')
@section('content-title', 'Students')
@section('content-area')
    @if (session()->has('message'))
        <div class="alert {{ session('alert') ?? 'alert-info' }}">
            {{ session('message') }}
        </div>
    @endif
    @if ($data)
        <table class="table table-striped table-hovered table-bordered">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Roll No </th>
                <th>Class</th>
                <th>Section</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Actions</th>
                {{-- <th>Delete</th>
                <th>View</th>
                <th>Make Result</th> --}}

                @foreach ($data as $student)

            <tr>
                <td>{{ $student['id'] }}</td>
                <td>{{ $student['name'] }}</td>
                <td>{{ $student['roll_no'] }}</td>
                <td>{{ $student->class['title'] }}</td>
                <td>{{ $student->class['section'] }}</td>
                <td>{{ $student['contact'] }}</td>
                <td>{{ $student['address'] }}</td>
                <td colspan="2">
                    <a href="student/{{ $student['id'] }}/edit" class="btn btn-sm btn-warning"><i
                            class="fas fa-edit"></i></a>
                    <a href="student/{{ $student['id'] }}" class="btn btn-sm btn-success"><i
                            class="fas fa-info-circle"></i></a>
                </td>
                {{-- <td><a href="/view/{{ $student['id'] }}" class="btn btn-sm btn-primary">View</a></td>
                <td><a href="/view/{{ $student['id'] }}" class="btn btn-sm btn-primary">Result</a></td> --}}

            </tr>
    @endforeach
    </table>

    @endif

@endsection
