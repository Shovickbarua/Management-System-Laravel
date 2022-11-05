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
use App\Http\Controllers\ViewStudentController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\MarkController;

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
Route::post('/sign',[Authentication::class,'signIn'])->name('signin');
Route::get('/signIn',[Authentication::class,'index'])->name('signInform');
Route::get('/logout',[Authentication::class,'signOut'])->name('logOut');

Route::group(['middleware' => 'isUser'],function(){
Route::resource('/student',StudentController::class);

//Route::get('/view_student/{id}',[StudentController::class,'viewshow'])->name('student_des');

Route::resource('/course',CourseController::class);

Route::resource('/year',YearController::class);

Route::resource('/role',RoleController::class);

Route::resource('/department',DepartmentController::class);

Route::resource('/semester',SemesterController::class);

Route::resource('/faculty',FacultyController::class);

Route::resource('/addMarks',MarkController::class);
Route::get('/getcourses/{id}',[MarkController::class,'getcourses'])->name('getcourses');
Route::get('/getData/{id}',[MarkController::class,'getData'])->name('getData');

Route::resource('/result',ResultController::class);
//Route::get('/student_view/{stu_id}',[ResultController::class,'view_result'])->name('student_view');
Route::get('/view_result/{stu_id}',[ResultController::class,'stu_show'])->name('view_result');

Route::get('/view_student/{id}',[ViewStudentController::class,'viewstu'])->name('student_des');
Route::get('/student_info/{id}',[ViewStudentController::class,'downloadpdf']);

});