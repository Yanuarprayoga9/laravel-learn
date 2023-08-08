<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
    Route::get('student',[StudentController::class,'index']);
    Route::get('student/{id}',[StudentController::class,'show']);



    Route::get('/class', [ClassController::class, 'index']);
    Route::get('/class/{id}', [ClassController::class, 'show']);

    Route::get('/extra',[ExtracurricularController::class,'index']);
    Route::get('/extra/{id}',[ExtracurricularController::class,'show']);

    Route::get('/teacher',[TeacherController::class,'index']);
    Route::get('/teacher/{id}',[TeacherController::class,'show']);
