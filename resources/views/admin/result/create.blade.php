@extends('admin.layout.master')
@section('level', 'Result/Create')
@section('content-title', 'Create Result')
@section('content-area')

    <form action="{{ route('result.store') }}" method="post">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputPassword1">Student ID</label>
                    <input type="text" name="roll_no" id="rollno" class="form-control" placeholder="Roll No"
                        value="{{ $id }}">
                </div>
                @csrf
                @foreach ($subjects as $subject)
                    <div class="form-group">
                        <label for="{{ $subject->title }}">{{ $subject->title }}</label>
                        <input id="{{ $subject->title }}" class="form-control" type="number"
                            placeholder="{{ $subject->title }} Marks" name="{{ $subject->id }}" max="100" min="0"
                            required>
                    </div>
                @endforeach
                <input type="submit" value="Add" class="btn btn-primary float-right">
            </div>
        </div>
        </div>
    </form>

@endsection
