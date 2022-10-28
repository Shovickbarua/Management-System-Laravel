<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\Department;
use App\Models\Student;
use App\Models\Semester;
use App\Models\Course;
use App\Models\Year;
use App\Models\Exam;
use App\Models\Mark;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $students= DB::table('students');

        $departments = Department::all();

        if($request->stu_id && $request->dep_id){  
        $students = $students->where('students.stu_id','LIKE','%'.$request->stu_id.'%')
                    ->where('departments.id','LIKE','%'.$request->dep_id.'%');
                    
        }
        $students =$students
                ->join('semesters','students.sem_id','=','semesters.id')
                ->join('departments','students.dep_id','=','departments.id')
                ->join('programs','students.shift_id','=','programs.id')
                ->join('years','students.year_id','=','years.id')
                ->get();       
 
                
        
        return view('result.search',compact('students','departments'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function stu_show($stu_id)
    {
        $data = Student::find($stu_id);

        return view('result.view_result',compact($data));
    }
    public function view_result(Request $request,$stu_id)
    {

       // $data = DB::table('marks')->sum('balance')->where('stu_id' '=' $stu_id);
        $data = DB::table('marks')->where('marks.stu_id','LIKE','%'.$request->stu_id.'%')->sum('mark');
        $datas = DB::table('marks')->where('marks.stu_id','LIKE','%'.$request->stu_id.'%')->sum('stu_id');
        echo $data/$datas; die;
       // return view('result.view_result',compact($data));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit(Result $result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
        //
    }
}
