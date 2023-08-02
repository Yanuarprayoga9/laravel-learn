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
}
