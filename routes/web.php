<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */

Route::prefix('students')->group(function () {
    Route::get('/', [StudentController::class, 'index']);
    Route::get('/about', function () {
        return view('students.about');
    });
});

Route::prefix('class')->group(function () {
    Route::get('/', [ClassController::class, 'index']);
    Route::get('/about', function () {
        return view('class.about');
    });
});

