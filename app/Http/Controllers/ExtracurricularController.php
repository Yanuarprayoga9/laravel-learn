<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use Illuminate\Http\Request;

class ExtracurricularController extends Controller
{
    public function index(){
        $data = Extracurricular::with('students')->get();
        return view('student.extracurricular',['extraList'=>$data]);
    }
    public function show($id){
        $data = Extracurricular::with('students')->findOrFail($id);
        return view('student.extracurricular-details',['extraList'=>$data]);
    }
}
