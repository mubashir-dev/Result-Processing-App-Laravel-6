@extends('admin.layout.master')
@section('level', 'Subject/Create')
@section('content-title', 'Create Subject')
@section('content-area')

    <form action="{{ route('subject.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Title"
                        value="{{ old('title') }}">
                    @error('title')
                        <span class="text-md text-danger">{{ $message }}</i></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"
                        placeholder="Description">{{ old('description') }}</textarea>
                    @error('description')
                        <span class="text-md text-danger">{{ $message }}</i></span>
                    @enderror
                </div>
                <input type="submit" value="Add" class="btn btn-primary float-right">
            </div>
        </div>
        </div>
    </form>

@endsection
