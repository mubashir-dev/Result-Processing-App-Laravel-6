@extends('admin.layout.master')
@section('level', 'Classes')
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
            <tr>
                <td>{{ $data['id'] }}</td>
                <td>{{ $data['title'] }}</td>
                <td>{{ $data['section'] }}</td>
                <td>{{ $data['description'] }}</td>
            </tr>

        </table>
        <div class="row mt-2">
            <div class="col-md-12 text-center text-right">
                <form method="POST" action="{{ url('/class', $data->id) }}">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-md btn-danger">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    @endif
@endsection
