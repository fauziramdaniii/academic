<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FacultyController;
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

Route::get('/', function () {
    return view('welcome');
});

//Route::Resource('/course', CourseController::class);
Route::Resource('/student', StudentController::class);
Route::Resource('/faculty', FacultyController::class);

// Route::resource('/student', StudentController::class);
// Route::resource('/student/create', StudentController::class);
// Route::resource('/student/store', StudentController::class);
// Route::resource('/student/{id}/delete', StudentController::class);
// Route::put('/student/{id}/edit', StudentController::class);
// Route::resource('/student/edit/{id}', StudentController::class);
