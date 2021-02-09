<?php

namespace App\Http\Controllers\Score;

use App\Score;
use App\Student;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Symfony\Component\Console\Input\Input;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        $score = DB::table('scores')->select('student_id')->distinct()->get();

        return view('admin.result.show', ['data' => $students, 'score' => $score->toArray()]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $students = Subject::all();
        return view('admin.result.create', ['subjects' => $students, 'id' => $id]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $count = DB::table('subjects')->count();
        $subjects = Subject::all();
        $resultFlag = false;
        foreach ($subjects as $subject) {
            $score = new Score;
            $score['subject_id'] = $subject->id;
            $score['student_id'] = $request->get('roll_no');
            $score['total'] = $subject->total_marks;
            $score['obtain'] = $request->get($subject->id);
            $score->save();
            $resultFlag = true;
        }
        if ($resultFlag) {

            return redirect("/result")->with(['message' => 'Result Data has been Created', 'alert' => 'alert-success']);
        }

        return redirect("/result")->back()->with(['message' => 'Result Data has not been Created', 'alert' => 'alert-danger']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $students = Subject::all();
        return view('admin.result.create', ['subjects' => $students, 'id' => $id]);
    }


    public function generateResult($id)
    {
        $student = Student::find($id);
        $subjects = Subject::all();
        $marks = Score::where('student_id', $id)->get();
        $total =
            Score::where('student_id', $id)->sum('total');
        $obtain = Score::where('student_id', $id)->sum('obtain');
        $percentage = Score::where('student_id', $id)->avg('obtain');

        return view('admin.result.student_result', [
            'subjects' => $subjects,
            'student' => $student, 'marks' => $marks,
            'obtain' => $obtain, 'total' => $total, 'percentage' => $percentage
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
