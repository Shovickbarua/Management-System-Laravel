<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\YearController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FacultyController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',[Authentication::class,'index']);

Route::resource('/student',StudentController::class);

Route::resource('/course',CourseController::class);

Route::resource('/year',YearController::class);

Route::resource('/role',RoleController::class);

Route::resource('/department',DepartmentController::class);

Route::resource('/semester',SemesterController::class);

Route::resource('/faculty',FacultyController::class);