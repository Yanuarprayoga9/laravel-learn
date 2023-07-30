<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    public function index(){
        // $student = Student::all();
        $student = DB::table('students')->get();
        dd($student);
        // return view('student.welcome',['studentList'=>$student]);
    }
    public function about()
    {
        return view('student.about');
    }
}
