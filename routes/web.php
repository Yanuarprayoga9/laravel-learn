<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\ExtracurricularController;
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
Route::prefix('student')->group(function () {
    Route::get('/student',[StudentController::class,'index']);
    Route::get('/class', [ClassController::class, 'index']);
    Route::get('/extra',[ExtracurricularController::class,'index']);
});
