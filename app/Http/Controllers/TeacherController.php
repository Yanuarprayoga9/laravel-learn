<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        $teacher = Teacher::all();
        return view('student.teacher',['teacher'=>$teacher]);
    }
}
