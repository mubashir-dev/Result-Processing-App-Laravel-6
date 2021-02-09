<?php

use App\Student;
use App\ClassLevel;

Route::get('/', function () {
    $students =  Student::all();
    return view('welcome', ['students' => $students]);
});


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::resource('student', 'Student\StudentController');
    Route::resource('class',   'Classes\ClassController');
    Route::resource('subject', 'Subject\SubjectController');
    Route::resource('result',  'Score\ScoreController');
    Route::get('result/student/{id}', 'Score\ScoreController@generateResult');
});

Auth::routes();
