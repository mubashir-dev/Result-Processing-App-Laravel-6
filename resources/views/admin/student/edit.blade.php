@extends('admin.layout.master')
@section('level', 'Student/Edit')
@section('content-title', 'Edit Student')
@section('content-area')

    <form action="/student/{{ $student->id }}" method="post">
        <div class="row">
            <input type="hidden" name="id" value="{{ $student->id }}">
            @csrf
            {{ method_field('PATCH') }}
            <div class=" col-md-12">
                <div class="form-group">
                    <label for="exampleInputPassword1">RollNo</label>
                    <input type="text" name="roll_no" id="roll_no" class="form-control" placeholder="Roll No"
                        value="{{ $student->roll_no }}">
                    @error('roll_no')
                        <span class="text-md text-danger">{{ $message }}</i></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name"
                        value="{{ $student->name }}">
                    @error('name')
                        <span class="text-md text-danger">{{ $message }}</i></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Class</label>
                    <select class="form-control select2" style="width: 100%;" name="class">
                        <option selected="selected">Select Class</option>
                        @foreach ($classes as $class)
                            <option value="{{ $class->id }}" {{ old('class') == $class->id ? 'selected' : '' }}
                                {{ $class->id == $student->class_id ? 'selected' : '' }}>
                                {{ $class->title }} {{ $class->section }}
                            </option>
                        @endforeach
                    </select>
                    @error('class')
                        <span class="text-md text-danger">{{ $message }}</i></span>
                    @enderror
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Contact</label>
                    <input type="text" name="contact" id="contact" class="form-control" placeholder="Contact"
                        value="{{ $student->contact }}">
                    @error('contact')
                        <span class="text-md text-danger">{{ $message }}</i></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea name="address" id="address" cols="30" rows="10" class="form-control"
                        placeholder="Address">{{ $student->address }}</textarea>
                    @error('address')
                        <span class="text-md text-danger">{{ $message }}</i></span>
                    @enderror
                </div>


            </div>
        </div>
        <div class="row col-md-12 float-right">
            <input type="submit" value="Edit" class="btn btn-primary">
        </div>
        </div>

    </form>

@endsection
