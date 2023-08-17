<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ClassCreateRequest;

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
   public function store(ClassCreateRequest $request){
      // $class = new ClassRoom;
      // $class->name = $request->name;
      // $class->teacher_id = $request->teacher_id;
      // $class->save();
      // $validated = $request->validate([
      //    'name' => 'unique:class|string|max:255' 
      // ]);
      // if($validated){
         $class = ClassRoom::create($request->all());
         if($class){
            Session::flash(
               'status' , 'success'
            );
            return redirect('/class');
         }
         return redirect('/class');
      }
      // return redirect()->back()->withErrors($validated)->withInput();
   


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
