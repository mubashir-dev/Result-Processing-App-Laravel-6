@extends('admin.layout.master')
@section('level', 'Student/Create')
@section('content-title', 'Create Student')
@section('content-area')

    <form action="{{ route('student.store') }}" method="post">
        <div class="row">

            @csrf
            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputPassword1">RollNo</label>
                    <input type="text" name="roll_no" id="roll_no" class="form-control" placeholder="Roll No"
                        value="{{ old('roll_no') }}">
                    @error('roll_no')
                        <span class="text-md text-danger">{{ $message }}</i></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name"
                        value="{{ old('name') }}">
                    @error('name')
                        <span class="text-md text-danger">{{ $message }}</i></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Class</label>
                    <select class="form-control select2" style="width: 100%;" name="class">
                        <option selected="selected">Select Class</option>
                        @foreach ($classes as $class)
                            <option value="{{ $class->id }}" {{ old('class') == $class->id ? 'selected' : '' }}>
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
                        value="{{ old('contact') }}">
                    @error('contact')
                        <span class="text-md text-danger">{{ $message }}</i></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea name="address" id="address" cols="30" rows="10" class="form-control"
                        placeholder="Address">{{ old('address') }}</textarea>
                    @error('address')
                        <span class="text-md text-danger">{{ $message }}</i></span>
                    @enderror
                </div>


            </div>
        </div>
        </div>
        <input type="submit" value="Add">
    </form>

@endsection
