<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ViewStudentController extends Controller
{
    public function viewstu($id){
        $student_data = Student::find($id);  
        return view('viewstudent',compact('student_data'));

    }
    public function downloadpdf($id){
        $student_data = Student::find($id);
        $pdf = Pdf::loadView('viewstudent', compact('student_data'));
        return $pdf->download('student.pdf');
    }
}

