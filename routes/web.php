<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ExtracurricularController;

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
    Route::get('/login',[AuthController::class,'index'])->name('login');

    Route::get('students',[StudentController::class,'index'])->middleware('auth');
    Route::get('student/{id}',[StudentController::class,'show']);
    Route::get('student-add',[StudentController::class,'create']);
    Route::post('studentsubmit',[StudentController::class,'store']);

    //Edit
    Route::get('student-edit/{id}',[StudentController::class,'edit']);
    Route::put('student-edit/editstudent/{id}',[StudentController::class,'storeedit']);
    Route::delete('student-delete/{id}',[StudentController::class,'deleteStudent']);
    //delete with redirect
    Route::get('student-deleteR/{id}',[StudentController::class,'deleteRStudent']);
    Route::get('student-deleteR/student-destroy/{id}',[StudentController::class,'destroyRStudent']);
    Route::get('student-deleted',[StudentController::class,'deletedStudent']);
    Route::get('student/{id}/restore',[StudentController::class,'restoreStudent']);


    Route::get('/class', [ClassController::class, 'index']);
    Route::get('/class/{id}', [ClassController::class, 'show']);
    Route::get('/class-add', [ClassController::class, 'create']);
    Route::post('classsubmit', [ClassController::class, 'store']);
    // edit
    Route::get('/class-edit/{id}', [ClassController::class, 'editclass']);
    Route::put('class-edit/classedit/{id}',[ClassController::class,'updateclass']);


    Route::get('/extra',[ExtracurricularController::class,'index']);
    Route::get('/extra/{id}',[ExtracurricularController::class,'show']);

    Route::get('/teacher',[TeacherController::class,'index']);
    Route::get('/teacher/{id}',[TeacherController::class,'show']);
