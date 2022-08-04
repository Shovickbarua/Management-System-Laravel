<?php

namespace App\Http\Controllers;


use App\Models\Course;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses= DB::table('courses')
                ->join('departments','courses.dep_id','=','departments.id')
                ->get();
        return view('courses.course_list',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        return view('courses.add_course',compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'course_name'  => 'required',
                'dep_id'  => 'required',
                'course_code'  => 'required'
            ],
        );

        $course = new Course();
        $course->course_name = $request->course_name;
        $course->dep_id = $request->dep_id;
        $course->course_code = $request->course_code;
        $course->save();

        return redirect(route('course.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course_data = Course::find($id);
        $departments= Department::all();
        return view('courses.course_edit',compact('course_data','departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course, $id)
    {
        $course =  Course::find($id);
        $course->course_name = $request->course_name;
        $course->dep_id = $request->dep_id;
        $course->course_code = $request->course_code;
        $course->save();

        return redirect(route('course.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        Course::destroy($course->id);
        return redirect(route('course.index'));
    }
}
