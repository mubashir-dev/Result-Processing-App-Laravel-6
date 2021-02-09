@extends('admin.layout.master')
@section('level', 'Subject Show')
@section('content-title', 'Subjects')
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
                <th>Title</th>
                <th>Description</th>
                <th>Total Marks</th>
                <th>Actions</th>
                @foreach ($data as $subject)
            <tr>
                <td>{{ $subject->id }}</td>
                <td>{{ $subject->title }}</td>
                <td>{{ $subject->description }}</td>
                <td>{{ $subject->total_marks }}</td>

                <td colspan="2">
                    <a href="subject/{{ $subject['id'] }}/edit/" class="btn btn-sm btn-warning"><i
                            class="fas fa-edit"></i></a>
                    <a href="subject/{{ $subject['id'] }}" class="btn btn-sm btn-success"><i
                            class="fas fa-info-circle"></i></a>
                </td>
            </tr>
    @endforeach
    </table>
    @endif
@endsection
