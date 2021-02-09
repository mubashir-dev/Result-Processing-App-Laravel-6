<?php

namespace App\Http\Controllers\Subject;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subject;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Subject::all();
        return view('admin.subject.show', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subject.create');
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
            'description' => 'required'
        ];
        $messages = [
            'title.required'    => 'Enter Subject Title!',
            'description.required' => 'Slect Subject Description!',
        ];

        $request->validate($rules, $messages);
        //Model Object 
        $student = new Subject;

        //Assigning value to Model
        $student['title'] = $request->get('title');
        $student['description'] = $request->get('description');

        if ($student->save()) {

            return redirect("/subject")->with(['message' => 'Subject Data has been Created', 'alert' => 'alert-success']);
        }

        return redirect("/subject")->back()->with(['message' => 'Subject Data has not been Created', 'alert' => 'alert-danger']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Subject::find($id);
        return view('admin.subject.single', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Subject::find($id);
        return view('admin.subject.edit', ['data' => $student]);
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
            'description' => 'required'
        ];
        $messages = [
            'title.required'    => 'Enter Subject Title!',
            'description.required' => 'Slect Subject Description!',
        ];

        $request->validate($rules, $messages);

        //Model Object 
        $student = Subject::find($id);

        //Assigning value to Model
        $student['title'] = $request->get('title');
        $student['description'] = $request->get('description');

        if ($student->update()) {

            return redirect("/subject")->with(['message' => 'Subject Data has been Edited', 'alert' => 'alert-success']);
        }

        return redirect("/subject")->back()->with(['message' => 'Subject Data has not been Edited', 'alert' => 'alert-danger']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject = Subject::find($id);
        if ($subject->delete()) {

            return redirect("/subject")->with(['message' => 'Subject Data has been Trashed', 'alert' => 'alert-success']);
        }

        return redirect("/subject")->back()->with(['message' => 'Subject Data has not been Trashed', 'alert' => 'alert-danger']);
    }
}
