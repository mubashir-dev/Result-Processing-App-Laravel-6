@extends('admin.layout.master')
@section('level', 'Class Edit')
@section('content-title', 'Edit Class')
@section('content-area')
    <form action="/class/{{ $data->id }}" method="post">
        @csrf
        {{ method_field('PATCH') }}
        <input type="hidden" name="id" name="id" value="{{ $data->id }}">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Class Title"
                        value="{{ $data->title }}">
                    @error('title')
                        <span class="text-md text-danger">{{ $message }}</i></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="section">Section</label>
                    <input type="text" name="section" id="section" class="form-control" placeholder="Class Section"
                        value="{{ $data->section }}">
                    @error('section')
                        <span class="text-md text-danger">{{ $message }}</i></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"
                        placeholder="Class Description">{{ $data->description }}
                                                                    </textarea>
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
