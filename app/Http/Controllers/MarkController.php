<?php

namespace App\Http\Controllers;

use App\Models\Mark;
use App\Models\Department;
use App\Models\Student;
use App\Models\Semester;
use App\Models\Course;
use App\Models\Year;
use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        $exams = Exam::all();
        return view('marks.add_marks',compact('departments','exams'));
        
    }


    public function getcourses($id)
    {
        $courses = Course::where('dep_id',$id)->pluck('course_name','id');
        return json_encode($courses);
    }

    public function getData($id)
    {
        $exams = Exam::all();
        $data = Student::where('course_id',$id)->get();
        return view('marks.view_marks',compact('data','exams'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       $stu_id = DB::table('students')->where('students.id','LIKE','%'.$request->id.'%')->pluck('stu_id')->first();
        //echo $stu_id;die;
        $stu_id      = $stu_id;
        $course_id   = $request->course_id;
        $exam_id     = $request->exam_id;
        $mark        = $request->mark;
     
        for($i=0; $i<count(array($stu_id)); $i++){
            $datasave=[
                'stu_id'    => $stu_id[$i],
               // 'course_id' => $course_id[$i],
                'exam_id'   => $exam_id[$i],
                'mark'      => $mark[$i]
            ];
            DB::table('marks')->insert($datasave);
        }
        return view('dashboards.dashboard');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function show(Mark $mark)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function edit(Mark $mark)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mark $mark)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mark $mark)
    {
        //
    }
}
