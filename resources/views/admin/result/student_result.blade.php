@extends('admin.layout.master')
@section('level', 'Result/ Show')
@section('content-title', 'Student Show')
@section('content-area')
    @if (session()->has('message'))
        <div class="alert {{ session('alert') ?? 'alert-info' }}">
            {{ session('message') }}
        </div>
    @endif
    <table class="table table-striped table-hovered table-bordered  text-center">
        <tr class="bg-danger">
            <th>#</th>
            <th>Name</th>
            <th>Roll No </th>
            <th>Class</th>
            <th>Section</th>
        <tr>
            <td>{{ $student['id'] }}</td>
            <td>{{ $student['name'] }}</td>
            <td>{{ $student['roll_no'] }}</td>
            <td>{{ $student->class['title'] }}</td>
            <td>{{ $student->class['section'] }}</td>
            </td>
        </tr>
    </table>
    <hr>
    <table class="table table-striped table-hovered table-bordered  text-center">
        <tr class="bg-primary">
            @foreach ($subjects as $subject)
                <th>{{ $subject['title'] }}</th>
            @endforeach
        <tr>
        <tr>
            @foreach ($marks as $mark)

                <td>{{ $mark['obtain'] }}</td>
            @endforeach
        </tr>
    </table>
    <hr>

    <table class="table table-striped table-hovered table-bordered text-center">
        <tr class="bg-success">
            <th>Total</th>
            <th>Obtain</th>
            <th>Percentage</th>
        <tr class="text-bold">
            <td>
                {{ $total }}
            </td>
            <td>{{ $obtain }}</td>
            <td>{{ $percentage }}</td>
            </td>
        </tr>
    </table>

@endsection
