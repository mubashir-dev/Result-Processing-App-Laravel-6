@extends('admin.layout.master')
@section('level', 'Student')
@section('content-title', 'Students')
@section('content-area')
    @if (session()->has('message'))
        <div class="alert {{ session('alert') ?? 'alert-info' }}">
            {{ session('message') }}
        </div>
    @endif
    @if ($student)
        <table class="table table-striped table-bordered">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Roll No </th>
                <th>Class</th>
                <th>Section</th>
                <th>Contact</th>
                <th>Address</th>
            <tr>
                <td>{{ $student['id'] }}</td>
                <td>{{ $student['name'] }}</td>
                <td>{{ $student['roll_no'] }}</td>
                <td>{{ $student->class['title'] }}</td>
                <td>{{ $student->class['section'] }}</td>
                <td>{{ $student['contact'] }}</td>
                <td>{{ $student['address'] }}</td>
            </tr>
        </table>
        <div class="row mt-2">
            <div class="col-md-6 text-center">
                <form method="POST" action="{{ url('/student', $student->id) }}">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-md btn-danger">
                        Delete
                    </button>
                </form>
            </div>
            <div class="col-md-6 float-left">
                <a href="/view/{{ $student['id'] }}" class="text-center btn btn-md btn-primary float-right">Result</a>
            </div>
        </div>
    @endif

@endsection
