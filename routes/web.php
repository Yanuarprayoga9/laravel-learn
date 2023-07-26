<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;

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

Route::prefix('user')->group(function () {
    Route::get('/', function () {
        return view('user.welcome', ['name' => 'yanuar', 'role' => 'admin']);
    });
    Route::get('/about/{id}', function ($id) {
        return view('user.about',['id'=>$id]);
    });
});
