@extends('admin.layout.master')
@section('level', 'Class Show')
@section('content-title', 'Classes')
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
                <th>Section</th>
                <th>Description</th>
                <th>Actions</th>
                @foreach ($data as $classes)
            <tr>
                <td>{{ $classes->id }}</td>
                <td>{{ $classes->title }}</td>
                <td>{{ $classes->section }}</td>
                <td>{{ $classes->description }}</td>
                <td colspan="2">
                    <a href="class/{{ $classes['id'] }}/edit" class="btn btn-sm btn-warning"><i
                            class="fas fa-edit"></i></a>
                    <a href="student/{{ $classes['id'] }}" class="btn btn-sm btn-success"><i
                            class="fas fa-info-circle"></i></a>
                </td>
            </tr>
    @endforeach
    </table>
    @endif
@endsection
