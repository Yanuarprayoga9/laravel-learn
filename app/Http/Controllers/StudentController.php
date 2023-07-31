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
        // DB::table('students')->insert([
        //     'name'=>"query builder",
        //     'gender'=>'Lk',
        //     'nis' => '01023002',
        //     'class_id'=>1
        // ]);
        Student::create([
            'name' => 'eloquent',
            'gender' => 'P',
            'nis' => '0898012',
            'class_id' => 2
        ]);
        // return $student;
        // dd($student);
        // return view('student.welcome',['studentList'=>$student]);
    }
    public function about()
    {
        return view('student.about');
    }
}
