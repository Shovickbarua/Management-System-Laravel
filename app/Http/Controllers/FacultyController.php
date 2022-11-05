<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculties = DB::table('faculties')
                    ->join('departments','faculties.dep_id','=','departments.id')
                    ->get();
        return view('faculty.faculty_list',compact('faculties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        return view('faculty.add_faculty',compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
                'faculty_name'  => 'required',
                'fName'         => 'required',
                'mName'         => 'required',
                'email'         => 'required|unique:faculties',
                'mobile'        => 'unique:faculties',
                'dep_id'        => 'required',
                'image'         => 'required|mimes:jpg,jpeg,png'
        ]);
        $faculty = new Faculty();
        $faculty->faculty_name =$request->faculty_name;
        $faculty->fName =$request->fName;
        $faculty->mName =$request->mName;
        $faculty->email =$request->email;
        $faculty->mobile =$request->mobile;
        $faculty->address =$request->address;
        $faculty->gender =$request->gender;
        $faculty->religion =$request->religion;
        $faculty->dob =$request->dob;
        $faculty->dep_id =$request->dep_id;
        if($request->has('image')){
            // dd($request);
             $image = $request->file('image');
             $name = time().uniqid().'.'.$image->extension();
             $image->move('storage/app/faculties',$name);
             $faculty->image = $name;
         }
        $faculty->save();

        return redirect(route('faculty.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function show(Faculty $faculty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function edit(Faculty $faculty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faculty $faculty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faculty $faculty)
    {
        //
    }
}
