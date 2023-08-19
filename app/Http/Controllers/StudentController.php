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
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        // $student = Student::with('class.homeroomTeacher','extracurriculars')->get();
        $student = Student::with('class')->where('name', 'LIKE', '%' . $keyword . '%')->orWhere('nis', 'LIKE', '%' . $keyword . '%')->orWhereHas('class', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })
            ->paginate(10);
        return view('student.students', ['studentList' => $student]);
    }
    public function show($id)
    {

        // $student = Student::with('class.homeroomTeacher','extracurriculars')->get();
        $student = Student::with('class.homeroomTeacher', 'extracurriculars')->findOrFail($id);
        return view('student.student', ['studentList' => $student]);
    }
    public function create()
    {
        //solve add function student
        $class = ClassRoom::select('id', 'name')->get();
        return view('student.student-add', ['class' => $class]);
    }


    public function store(StudentCreateRequest $request)
    {

        //solve add function student

        // dd($request->all());
        // $student = Student::create(($request->all()));
      
        $newName = '';
        if ($request->file('photo')) {
            $extension  = $request->file('photo')->getClientOriginalExtension();
            $newName = $request->name . '-' . now()->timestamp . '.' . $extension;
            $request->file('photo')->storeAs('photo', $newName);
        }
        $request['image'] = $newName;
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
        $class = ClassRoom::select('id', 'name')->get();
        $student = Student::findOrFail($id);
        return view('student.student-edit', ['class' => $class, 'student' => $student]);
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
        if ($validatedData) {
            $student->update([
                'nis' => $validatedData['nis'],
                'name' => $validatedData['name'],
                'gender' => $validatedData['gender'],
                'class_id' => $request->class_id,
            ]);
            Session::flash(
                'statusUpdate',
                'data berhasil diperbaharui'
            );
            return redirect('/students');
        }
        return redirect();

        // Redirect ke halaman yang sesuai setelah berhasil memperbarui
    }
    public function deleteStudent($id)
    {
        Student::findOrFail($id)->delete();
        return Redirect('students');
    }


    public function deleteRStudent($id)
    {
        $student = Student::findOrFail($id);
        return view('student.student-delete', ['student' => $student]);
    }
    public function destroyRStudent($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        if ($student) {
            Session::flash(
                'statusdelete',
                'sukse menghapus data'
            );
            return Redirect('students');
        } else {
            Session::flash(
                'status',
                'gagal menghapus data'
            );
        }
    }

    public function deletedStudent()
    {
        $studentTrash = Student::onlyTrashed()->get();
        return view('student.student-deleted', ['studentTrash' => $studentTrash]);
    }
    public function restoreStudent($id)
    {
        Student::withTrashed()->where('id', $id)->restore();
    }
}
