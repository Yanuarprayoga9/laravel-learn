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
        
        $student = Student::all();
        return view('student.welcome',['studentList'=>$student]);
    }
    public function about()
    {
        return view('student.about');
    }
    public function test(){
        $numbers = [2,5,3,4,2,8,6,0,8,10,5];
        $count = collect($numbers)->map(function($item){
            return $item*2;
        });
        return [
            dd($count)
        ];
    }
}
