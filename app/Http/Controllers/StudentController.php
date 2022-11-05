<?php

namespace App\Http\Controllers;

use App\Models\department;
use App\Models\Program;
use App\Models\Semester;
use App\Models\student;
use App\Models\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students =DB::table('students')
                    ->join('semesters','students.sem_id','=','semesters.id')
                    ->join('departments','students.dep_id','=','departments.id')
                    ->join('programs','students.shift_id','=','programs.id')
                    ->join('years','students.year_id','=','years.id')
                    ->get();
      return view('students.stu_list',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $semesters = Semester::all();
        $departments = department::all();
        $programs = Program::all();
        $years = Year::all();
        return view('students.add_stu',compact('semesters','departments','programs','years'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
      /*  $request->validate(
            [
                'name'      => 'required',
                'fName'     => 'required',
                'mName'     => 'required',
                'email'     => 'required|unique:students',
                'mobile'    => 'unique:students',
                'gender'    => 'required',
                'religion'  => 'required',
                'dob'       => 'required',
                'sem_id'    => 'required',
                'dep_id'    => 'required',
                'shift_id'  => 'required',
                'year_id'   => 'required',
                'image'     => 'required|mimes:jpg,jpeg,png'
            ],
            
        ); */

        $student = Student::orderBy('id','DESC')->first();
        if ($student == null) {
    		$firstReg = 0;
    		$studentId = $firstReg+1;
    		if ($studentId < 10) {
    			$id_no = '000'.$studentId;
    		}elseif ($studentId < 100) {
    			$id_no = '00'.$studentId;
    		}elseif ($studentId < 1000) {
    			$id_no = '0'.$studentId;
    		}
    	}else{
        $student = Student::orderBy('id','DESC')->first()->id;
     	$studentId = $student+1;
     	if ($studentId < 10) {
    			$id_no = '000'.$studentId;
    		}elseif ($studentId < 100) {
    			$id_no = '00'.$studentId;
    		}elseif ($studentId < 1000) {
    			$id_no = '0'.$studentId;
    		}

    	} // end else 
        
            $years = Year::where('years.id','LIKE','%'.$request->year_id.'%')
                    ->pluck('year_name')
                    ->first();
        $final_id_no = $years.$id_no;
       // echo $final_id_no;die;
        
        $student = new Student();
        if($request->has('image')){
           // dd($request);
            $image = $request->file('image');
            $name = time().uniqid().'.'.$image->extension();
            $image->move('storage/app/students',$name);
            $student->image = $name;
        }
        $student->stuName = $request->stuName;
        $student->fName = $request->fName;
        $student->mName = $request->mName;
        $student->email = $request->email;
        $student->mobile = $request->mobile;
        $student->address =$request->address;
        $student->gender =$request->gender;
        $student->religion =$request->religion;
        $student->dob =$request->dob;
        $student->discount =$request->discount;
        $student->sem_id =$request->sem_id;
        $student->dep_id =$request->dep_id;
        $student->shift_id =$request->shift_id;
        $student->year_id =$request->year_id;
        $student->dep_id =$request->dep_id;
        $student ->stu_id=$final_id_no;
        
        $student->save();
        return redirect(route('student.index'));
    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function viewshow($id)
    {
        $student_data= Student::findOrFail($id);
        return view('students.viewstudent',compact('student_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        //
    }
}
