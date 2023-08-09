<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    public function index()
    {
        
        // $student = Student::with('class.homeroomTeacher','extracurriculars')->get();
        $student = Student::get();
        return view('student.students',['studentList'=>$student]);
    }
    public function show($id)
    {
        
        // $student = Student::with('class.homeroomTeacher','extracurriculars')->get();
        $student = Student::with('class.homeroomTeacher','extracurriculars')->findOrFail($id);
        return view('student.student',['studentList'=>$student]);
    }
    public function add()
    {
        //solve add function student
        return view('student.student-add');
    }
    
  
}
