<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

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
    public function create()
    {
        //solve add function student
        $class = ClassRoom::select('id','name')->get(); 
        return view('student.student-add',['class'=>$class]);
    }
    public function store(Request $request)
    {
        //solve add function student
      
        $student = new Student;
        $student->name = $request->name;
        $student->nis = $request->nis;
        $student->gender = $request->gender;
        $student->class_id = $request->class_id;
        $student->save();
    }
    
  
}
