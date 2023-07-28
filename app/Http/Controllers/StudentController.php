<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   
    //
    public function index()
    {


        $student = Student::all();
        
        return view('students.home',['studentList'=>$student]);
    }
}
