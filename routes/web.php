<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\HomeController;

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
    Route::get('/home',[HomeController::class,'index'])->name('login');

    Route::get('/login',[AuthController::class,'index'])->name('login')->middleware('guest');
    Route::post('/login',[AuthController::class,'authenticate'])->name('login');
    Route::get('/logout',[AuthController::class,'logout'])->name('login')->middleware('auth');

    Route::get('students',[StudentController::class,'index'])->middleware('auth');
    Route::get('student/{id}',[StudentController::class,'show'])->middleware('auth');
    Route::get('student-add',[StudentController::class,'create'])->middleware('auth');
    Route::post('studentsubmit',[StudentController::class,'store'])->middleware('auth');

    //Edit
    Route::get('student-edit/{id}',[StudentController::class,'edit'])->middleware('auth');
    Route::put('student-edit/editstudent/{id}',[StudentController::class,'storeedit'])->middleware('auth');
    Route::delete('student-delete/{id}',[StudentController::class,'deleteStudent'])->middleware('auth');
    //delete with redirect
    Route::get('student-deleteR/{id}',[StudentController::class,'deleteRStudent'])->middleware('auth');
    Route::get('student-deleteR/student-destroy/{id}',[StudentController::class,'destroyRStudent'])->middleware('auth');
    Route::get('student-deleted',[StudentController::class,'deletedStudent'])->middleware('auth');
    Route::get('student/{id}/restore',[StudentController::class,'restoreStudent'])->middleware('auth');


    Route::get('/class', [ClassController::class, 'index'])->middleware('auth');
    Route::get('/class/{id}', [ClassController::class, 'show'])->middleware('auth');
    Route::get('/class-add', [ClassController::class, 'create'])->middleware('auth');
    Route::post('classsubmit', [ClassController::class, 'store'])->middleware('auth');
    // edit
    Route::get('/class-edit/{id}', [ClassController::class, 'editclass'])->middleware('auth');
    Route::put('class-edit/classedit/{id}',[ClassController::class,'updateclass'])->middleware('auth');


    Route::get('/extra',[ExtracurricularController::class,'index'])->middleware('auth');
    Route::get('/extra/{id}',[ExtracurricularController::class,'show'])->middleware('auth');

    Route::get('/teacher',[TeacherController::class,'index'])->middleware('auth');
    Route::get('/teacher/{id}',[TeacherController::class,'show'])->middleware('auth');
