@extends('admin.layout.master')
@section('level', 'Subject Edit')
@section('content-title', 'Edit Subject')
@section('content-area')
    <form action="/subject/{{ $data['id'] }}" method="post">
        @csrf
        {{ method_field('PATCH') }}
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Title"
                        value="{{ $data['title'] }}">
                    @error('title')
                        <span class="text-md text-danger">{{ $message }}</i></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"
                        placeholder="Description">{{ $data['description'] }}</textarea>
                    @error('description')
                        <span class="text-md text-danger">{{ $message }}</i></span>
                    @enderror
                </div>
                <input type="submit" value="Edit" class="btn btn-primary float-right">
            </div>
        </div>
        </div>
    </form>

@endsection
