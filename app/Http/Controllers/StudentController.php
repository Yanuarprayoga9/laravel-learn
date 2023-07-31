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
            'nis' => '08980612',
            'class_id' => 2
        ]);
        DB::table('students')
            ->where('name', 'eloquent')
            ->update([
                'name'=>'eloquent update'
            ]);
        // return $student;
        // dd($student);
        // return view('student.welcome',['studentList'=>$student]);
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
