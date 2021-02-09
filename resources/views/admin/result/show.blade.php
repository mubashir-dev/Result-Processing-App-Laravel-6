@extends('admin.layout.master')
@section('level', 'Result/Make')
@section('content-title', 'Student Result')
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
                <th class="text-center">Actions</th>
                @foreach ($data as $student)
            <tr>
                <td>{{ $student['id'] }}</td>
                <td>{{ $student['name'] }}</td>
                <td>{{ $student['roll_no'] }}</td>
                <td>{{ $student->class['title'] }}</td>
                <td>{{ $student->class['section'] }}</td>
                <td colspan="2" class="text-center">
                    @if (!is_null($student->result->first()))
                        <a href="result/student/{{ $student['id'] }}" class="btn btn-sm btn-warning">
                            View Result</a>
                    @else
                        <a href="result/{{ $student['id'] }}" class="btn btn-sm btn-success">
                            Create Result</a>
                    @endif
                </td>
            </tr>
    @endforeach
    </table>

    @endif
    {{ gettype($score) }}
@endsection
