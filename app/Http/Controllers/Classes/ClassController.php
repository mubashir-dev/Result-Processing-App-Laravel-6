<?php

namespace App\Http\Controllers\Classes;

use App\ClassLevel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = ClassLevel::all();

        return view('admin.class.show', ['data' => $classes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.class.create');
        //
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
            'title' => 'required|max:20',
            'section' => 'required',
            'description' => 'required'
        ];
        $messages = [
            'title.required'    => 'Enter Class Title!',
            'section.required' => 'Enter Class Section!',
            'description.required' => 'Slect Class Description!',
        ];

        $request->validate($rules, $messages);
        //Model Object 
        $student = new ClassLevel;

        //Assigning value to Model
        $student['title'] = $request->get('title');
        $student['section'] = $request->get('section');
        $student['description'] = $request->get('description');

        if ($student->save()) {

            return redirect("/class")->with(['message' => 'Class Data has been Created', 'alert' => 'alert-success']);
        }

        return redirect("/class")->back()->with(['message' => 'Class Data has not been Created', 'alert' => 'alert-danger']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $classes = ClassLevel::find($id);
        return view('admin.class.single', ['data' => $classes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $classes = ClassLevel::find($id);

        return view('admin.class.edit', ['data' => $classes]);
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
            'title' => 'required|max:20',
            'section' => 'required',
            'description' => 'required'
        ];
        $messages = [
            'title.required'    => 'Enter Class Title!',
            'section.required' => 'Enter Class Section!',
            'description.required' => 'Slect Class Description!',
        ];

        $request->validate($rules, $messages);
        //Model Object 

        //Assigning value to Model
        $student = ClassLevel::find($id);
        $student['title'] = $request->get('title');
        $student['section'] = $request->get('section');
        $student['description'] = $request->get('description');

        if ($student->update()) {

            return redirect("/class")->with(['message' => 'Class Data has been Edited', 'alert' => 'alert-success']);
        }

        return redirect("/class")->back()->with(['message' => 'Class Data has not been Edited', 'alert' => 'alert-danger']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $class = ClassLevel::find($id);
        if ($class->update()) {

            return redirect("/class")->with(['message' => 'Class Data has been deleted', 'alert' => 'alert-success']);
        }

        return redirect("/class")->back()->with(['message' => 'Class Data has not been deleted', 'alert' => 'alert-danger']);
    }
}
