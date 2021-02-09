<?php

namespace App\Http\Controllers\Student;

use App\ClassLevel;
use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('admin.student.show', ['data' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = ClassLevel::all();
        return view('admin.student.create', ['classes' => $classes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [
            'roll_no' => 'required|unique:students|max:20',
            'name' => 'required',
            'class' => 'required',
            'contact' => 'required|max:15|min:11',
            'address' => 'required'
        ];
        $messages = [
            'name.required'    => 'Enter Your Name!',
            'address.required' => 'Address is required!',
            'class.required'  =>  'Slect student class!',
            'contact.required' => 'Contact is required!',
            'contact.max' => 'Enter Correct Contact!',
            'roll_no.required'    => 'Enter student rollno',
            'roll_no.unique'    => 'Rollno already exists',
        ];

        $request->validate($rules, $messages);
        //Model Object 
        $student = new Student;

        //Assigning value to Model
        $student['name'] = $request->get('name');
        $student['roll_no'] = $request->get('roll_no');
        $student['class_id'] = $request->get('class');
        $student['contact'] = $request->get('contact');
        $student['address'] = $request->get('address');

        if ($student->save()) {

            return redirect("/student")->with(['message' => 'Student Data has been Created', 'alert' => 'alert-success']);
        }

        return redirect("/student")->back()->with(['message' => 'Student Data has not been Created', 'alert' => 'alert-danger']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        $classes = ClassLevel::all();
        return view('admin.student.single', ['classes' => $classes, 'student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        $classes = ClassLevel::all();
        return view('admin.student.edit', ['classes' => $classes, 'student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'roll_no' => 'required|max:20',
            'name' => 'required',
            'class' => 'required',
            'contact' => 'required|max:15|min:11',
            'address' => 'required'
        ];
        $messages = [
            'name.required'    => 'Enter Your Name!',
            'address.required' => 'Address is required!',
            'class.required'  =>  'Slect student class!',
            'contact.required' => 'Contact is required!',
            'contact.max' => 'Enter Correct Contact!',
            'roll_no.required'    => 'Enter student rollno',
        ];

        $request->validate($rules, $messages);
        //Model Object 
        $student = Student::find($id);

        //Assigning value to Model
        $student['name'] = $request->get('name');
        $student['roll_no'] = $request->get('roll_no');
        $student['class_id'] = $request->get('class');
        $student['contact'] = $request->get('contact');
        $student['address'] = $request->get('address');
        if ($student->update()) {

            return redirect("/student")->with(['message' => 'Student Data has been Edited', 'alert' => 'alert-success']);
        }

        return redirect("/student")->back()->with(['message' => 'Student Data has not been Edited', 'alert' => 'alert-danger']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        if ($student->delete()) {

            return redirect("/student")->with(['message' => 'Student Data has been Trashed', 'alert' => 'alert-success']);
        }

        return redirect("/student")->back()->with(['message' => 'Student Data has not been Trashed', 'alert' => 'alert-danger']);
    }
}
