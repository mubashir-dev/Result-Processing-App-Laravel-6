@extends('admin.layout.master')
@section('level', 'Class Create')
@section('content-title', 'Create Class')
@section('content-area')
    <form action="{{ route('class.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Class Title"
                        value="{{ old('title') }}">
                    @error('title')
                        <span class="text-md text-danger">{{ $message }}</i></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="section">Section</label>
                    <input type="text" name="section" id="section" class="form-control" placeholder="Class Section"
                        value="{{ old('section') }}">
                    @error('section')
                        <span class="text-md text-danger">{{ $message }}</i></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"
                        placeholder="Class Description">
                        {{ old('description') }}
                        </textarea>
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
