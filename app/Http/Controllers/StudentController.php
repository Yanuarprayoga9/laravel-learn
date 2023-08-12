<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentCreateRequest;
use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
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

    
    public function store(StudentCreateRequest $request)
    {
        
        //solve add function student
       

            $student = Student::create(($request->all()));
            if($student){
                Session::flash('status','success');
                Session::flash('message','add new student success!');
            }
        return redirect('/students');

    }

    public function edit($id)
    {
        //solve add function student
        $class = ClassRoom::select('id','name')->get(); 
        $student = Student::findOrFail($id);
        return view('student.student-edit',['class'=>$class,'student'=>$student]);
    }


    public function storeedit(Request $request, $id)
{
    // Validasi data yang dikirimkan dari form
    $validatedData = $request->validate([
        'nis' => 'required|numeric',
        'name' => 'required|string|max:255',
        'gender' => 'required|in:male,female',
    ]);

    // Cari dan perbarui data student berdasarkan ID
    $student = Student::findOrFail($id);
    $student->update([
        'nis' => $validatedData['nis'],
        'name' => $validatedData['name'],
        'gender' => $validatedData['gender'],
        'class_id' => $request->class_id,
    ]);

    // Redirect ke halaman yang sesuai setelah berhasil memperbarui
    return redirect()->route('student.index')->with('success', 'Data siswa berhasil diperbarui.');
}
public function deleteStudent($id){
    Student::findOrFail($id)->delete();
    return Redirect('students');
 }


 public function deleteRStudent($id){
    $student = Student::findOrFail($id);
    return view('student.student-delete',['student'=>$student]);
 }
 public function destroyRStudent($id){
     $student = Student::findOrFail($id);
     $student->delete();
     if($student){
        Session::flash(
            'statusdelete','sukse menghapus data'
        );
        return Redirect('students');
     }else{
        Session::flash(
            'status','gagal menghapus data'
        );
     }
 }

    
  
}
