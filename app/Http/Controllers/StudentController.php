<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index(){
        var_dump('test');
        return view('home');
    }
}
