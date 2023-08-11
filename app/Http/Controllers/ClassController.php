<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ClassController extends Controller
{
   public function index(){
    $class = ClassRoom::with('students','homeroomTeacher')->get();
   //  $class = ClassRoom::with('students','homeroomTeacher')->get();
    return view('student.class',['class'=>$class]);
   }
   public function show($id){
    $class = ClassRoom::with('students','homeroomTeacher')->findOrFail($id);
    return view('student.classDetails',['class'=>$class]);
   }
   public function create(){
   $teacher = Teacher::select('name','id')->get();
    return view('student.class-add',['teacher'=>$teacher]);
   }
   public function store(Request $request){
      $class = new ClassRoom;
      // $class->name = $request->name;
      // $class->teacher_id = $request->teacher_id;
      // $class->save();
      $class->create($request->all());

      return redirect('/class')->with('message', 'Data kelas berhasil ditambahkan.');

   }


   public function editclass($id){
      
      $class = ClassRoom::findOrFail($id);
      $teacher = Teacher::all();
      return view('student.class-edit',['class'=>$class,'teacher'=>$teacher]);

   }
   public function updateclass(Request $request, $id){

      $class = ClassRoom::findOrFail($id);
      $class->update([
         $class->name = $request->name,
         $class->teacher_id = $request->teacher_id
      ]);
      return Redirect('/class');

   }
}
